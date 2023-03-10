<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    protected $major;
    public function __construct(Major $major)
    {
        $this->major = $major;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $majors = $this->major->orderBy('id', 'desc')->paginate(10)->withQueryString();
        return view('admin.dashboard.index', ['title' => "Dashboard", 'majors' => $majors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:majors,name',
            'code' => 'required|unique:majors,code',
            'reference_score' => 'required',
            'entrance_score' => 'required',
            'tuition' => 'required',
            'target' => 'required|integer|min:0',
            'subjects_combination' => 'required',
            'information' => 'required'
        ]);
        try {
            $subjectsCombination = $validatedData['subjects_combination'] ?? null;

            if (!is_null($subjectsCombination)) {
                $subjectsCombination = trim(preg_replace('/\s+/', '', $subjectsCombination));
                $validatedData['subjects_combination'] = explode( ",", $subjectsCombination);
            }

            $this->major->updateOrCreate($validatedData);
        } catch(Exception $e) {
            return redirect()->route('admin.index')->with(['error' => 'Th??m th??ng tin ng??nh KH??NG th??nh c??ng !!!']);
        }
        return redirect()->route('admin.index')->with(['success' => 'Th??m th??ng tin ng??nh th??nh c??ng !!!']);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show($major)
    {
        $major = $this->major->findOrFail($major);
        return view('admin.dashboard.edit', ['major' => $major]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $major
     * @return Application|Factory|View
     */
    public function edit($major)
    {
        $major = $this->major->findOrFail($major);
        return view('admin.dashboard.edit', ['major' => $major]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $major
     */
    public function update(Request $request, $major)
    {
        try {
            $major = $this->major->findOrFail($major);
            $validatedData = $request->validate([
                'name' => 'required|unique:majors,name,'.$major->id,
                'code' => 'required|unique:majors,code,'.$major->id,
                'reference_score' => 'required',
                'entrance_score' => 'required',
                'tuition' => 'required',
                'target' => 'required|integer|min:0',
                'subjects_combination' => 'required',
                'information' => 'required'
            ]);

            $referenceScore = $validatedData['reference_score'] ?? '';
            if (is_null($referenceScore)) {
                $validatedData['reference_score'] = (float) $referenceScore;
            }

            $entranceScore = $validatedData['entrance_score'] ?? '';
            if (is_null($referenceScore)) {
                $validatedData['entrance_score'] = (float) $entranceScore;
            }

            $subjectsCombination = $validatedData['subjects_combination'] ?? '';

            if (!is_null($subjectsCombination)) {
                $subjectsCombination = trim(preg_replace('/\s+/', '', $subjectsCombination));
                $validatedData['subjects_combination'] = explode( ",", $subjectsCombination);
            } else {
                $validatedData['subjects_combination'] = implode(",",$major->subjects_combination);
            }
            $major->update($validatedData);
        } catch(Exception $e) {
            return redirect()->route('admin.index')->with(['error' => 'C???p nh???t th??ng tin ng??nh KH??NG th??nh c??ng !!!']);
        }
        return redirect()->route('admin.index')->with(['success' => 'C???p nh???t th??ng tin ng??nh th??nh c??ng !!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $major
     */
    public function destroy($major)
    {
        $major = $this->major->findOrFail($major);
        if (isset($major)) {
            $major->delete();
            return redirect()->route('admin.index')->with(['success' => 'X??a th??ng tin ng??nh th??nh c??ng !!!']);
        }
        return redirect()->route('admin.index')->with(['error' => 'X??a th??ng tin ng??nh KH??NG th??nh c??ng !!!']);
    }
}
