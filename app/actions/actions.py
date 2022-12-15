# This files contains your custom actions which can be used to run
# custom Python code.
#
# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions


# This is a simple example for a custom action which utters "Hello World!"

from typing import Any, Text, Dict, List

from rasa_sdk import Action, Tracker
from rasa_sdk.executor import CollectingDispatcher
from rasa_sdk.events import AllSlotsReset
from pprint import pprint

import requests

HOST_NAME = "http://rasa-apache/api/majors/find"

class ActionGetMajorName(Action):
    def name(self) -> Text:
        return "action_get_major_name"
    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        major_code = tracker.get_slot('major_code')
        url = HOST_NAME
        headers = {
            "Accept": "application/json",
        }
        params = {
            'field': 'code',
            'value': major_code,
        }
        # Making the API call
        response = requests.get(url, params=params, headers=headers)
        data = response.json()
        if response.status_code == 404:
            bot_response = "Không tìm thấy mã ngành bạn chọn."
        else:
            bot_response = data['name']
        dispatcher.utter_message(text=bot_response)
        return []


class ActionFindMajorCode(Action):
    def name(self) -> Text:
        return "action_find_major_code"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        major_name = tracker.get_slot('major_name')
        url = HOST_NAME
        headers = {
            "Accept": "application/json",
        }
        params = {
            'field': 'name',
            'value': major_name,
        }

        # Making the API call
        response = requests.get(url, params=params, headers=headers)
        data = response.json()

        if response.status_code == 404:
            bot_response = "Không tìm thấy ngành bạn muốn tìm."
        else:
            bot_response = "Mã ngành của bạn cần tìm là: " + data['code']

        dispatcher.utter_message(text=bot_response)
        return []

class ActionFindMajorFee(Action):
    def name(self) -> Text:
        return "action_get_major_tuition"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        major_name = tracker.get_slot('major_name')
        url = HOST_NAME
        headers = {
            "Accept": "application/json",
        }
        params = {
            'field': 'name',
            'value': major_name,
        }

        # Making the API call
        response = requests.get(url, params=params, headers=headers)
        data = response.json()

        if response.status_code == 404:
            bot_response = "Không tìm thấy ngành bạn muốn tìm. Bạn vui lòng nhập tên đầy đủ của ngành giúp mình nha."
        else:
            bot_response = "Ngành " + data['name'] + " có học phí khoảng: " + str(data['tuition']) + " triệu đồng/năm.<br>Bạn có thể xem thêm thông tin về học phí của ĐHCT ở đây nha: <a href='https://tuyensinh.ctu.edu.vn/chuong-trinh-dai-tra/177-thong-tin/1007-hocphi2022.html' target='_blank'> Xem Thông Tin </a>"

        dispatcher.utter_message(text=bot_response)
        return []

class ActionFindMajorTarget(Action):
    def name(self) -> Text:
        return "action_get_major_target"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        major_name = tracker.get_slot('major_name')
        url = HOST_NAME
        headers = {
            "Accept": "application/json",
        }
        params = {
            'field': 'name',
            'value': major_name,
        }

        # Making the API call
        response = requests.get(url, params=params, headers=headers)
        data = response.json()

        if response.status_code == 404:
            bot_response = "Không tìm thấy ngành bạn muốn tìm. Bạn vui lòng nhập tên đầy đủ của ngành giúp mình nha."
        else:
            bot_response = "Ngành " + data['name'] + " năm nay lấy với chỉ tiêu là: " + str(data['target']) + ".<br>Bạn có thể xem thêm thông tin về chỉ tiêu các ngành khác của ĐHCT ở đây nha: <a href='https://tuyensinh.ctu.edu.vn/chuong-trinh-dai-tra/841-danh-muc-nganh-va-chi-tieu-tuyen-sinh-dhcq.html' target='_blank'> Xem Thông Tin </a>"

        dispatcher.utter_message(text=bot_response)
        return []

class ActionFindMajorScore(Action):
    def name(self) -> Text:
        return "action_get_major_score"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        major_name = tracker.get_slot('major_name')
        url = HOST_NAME
        headers = {
            "Accept": "application/json",
        }
        params = {
            'field': 'name',
            'value': major_name,
        }

        # Making the API call
        response = requests.get(url, params=params, headers=headers)
        data = response.json()

        if response.status_code == 404:
            bot_response = "Không tìm thấy ngành bạn muốn tìm. Bạn vui lòng nhập tên đầy đủ của ngành giúp mình nha."
        else:
            bot_response = "Ngành " + data['name'] + " năm nay có:<br> Điểm xét tuyển đầu vào là: " + str(data['entrance_score']) + " điểm.<br> Điểm chuẩn năm trước là: " + str(data['reference_score']) + " điểm.<br>Bạn có thể xem thêm thông tin về điểm xét tuyển của ĐHCT ở đây nha: <a href='https://tuyensinh.ctu.edu.vn/chuong-trinh-dai-tra/841-danh-muc-nganh-va-chi-tieu-tuyen-sinh-dhcq.html' target='_blank'> Xem Thông Tin </a>"

        dispatcher.utter_message(text=bot_response)
        return []

class ActionGetMajorInformation(Action):
    def name(self) -> Text:
        return "action_get_major_information"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        major_name = tracker.get_slot('major_name')
        url = HOST_NAME
        headers = {
            "Accept": "application/json",
        }
        params = {
            'field': 'name',
            'value': major_name,
        }

        # Making the API call
        response = requests.get(url, params=params, headers=headers)
        data = response.json()

        if response.status_code == 404:
            bot_response = "Không tìm thấy ngành bạn muốn tìm. Bạn vui lòng nhập tên đầy đủ của ngành giúp mình nha."
        else:
            bot_response = "Bạn có thể xem thông tin chi tiết của ngành " + data['name'] + " về chỉ tiêu, điểm xét tuyển, cơ hội việc làm, chương trình đào tạo tại đây: " + data['information']

        dispatcher.utter_message(text=bot_response)
        return []

class ActionSlotReset(Action):
    def name(self):
        return 'action_slot_reset'

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        return [AllSlotsReset()]
