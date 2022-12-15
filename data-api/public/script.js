
var $messages = $('.messages-content'),
    d, h, m,
    i = 0;
var senderId
$(window).load(function() {
    senderId = Math.floor(Math.random() * 100000);
    $messages.mCustomScrollbar();
    setTimeout(function() {
        greeting();
    }, 100);
});

function updateScrollbar() {
    $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
        scrollInertia: 10,
        timeout: 0
    });
}

function setDate(){
    d = new Date()
    if (m != d.getMinutes()) {
        m = d.getMinutes();
        $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
    }
}

function insertMessage() {
    msg = $('.message-input').val();
    if ($.trim(msg) == '') {
        return false;
    }
    $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
    setDate();
    $('.message-input').val(null);
    updateScrollbar();
    sendMessage(msg);
}

$('.message-submit').click(function() {
    insertMessage();
});

$(window).on('keydown', function(e) {
    if (e.which == 13) {
        insertMessage();
        return false;
    }
})

var greetingString = 'Xin chào bạn. Tôi là bot hỗ trợ tư vấn tuyển sinh trường ĐHCT. Bạn cần giúp gì?'

function greeting() {
    $('<div class="message loading new"><figure class="avatar"><img src="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" /></figure><span></span></div>').appendTo($('.mCSB_container'));
    updateScrollbar();

    setTimeout(function() {
        $('.message.loading').remove();
        $('<div class="message new"><figure class="avatar"><img src="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" /></figure>' + greetingString + '</div>').appendTo($('.mCSB_container')).addClass('new');
        setDate();
        updateScrollbar();
    }, 1000 + (Math.random() * 20) * 100);
}

sendMessage= async()=> {
    if ($('.message-input').val() != '') {
        return false;
    }
    updateScrollbar();

    getMessage(msg)
}

getMessage= async () =>{
    const data= {
        "sender": senderId,
        "message": msg
    }
    const settings = {

        method: 'POST',
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    };
    $('<div class="message loading new"><figure class="avatar"><img src="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" /></figure><span></span></div>').appendTo($('.mCSB_container'));

    try {
        const fetchResponse = await fetch(`http://localhost:5005/webhooks/rest/webhook`, settings);
        const responseMessage = await fetchResponse.json();
        $('.message.loading').remove();
        $('<div class="message new"><figure class="avatar"><img src="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" /></figure><p>' + responseMessage[0].text + '</p></div>').appendTo($('.mCSB_container')).addClass('new');
        setDate();
        updateScrollbar();
    } catch (e) {
        $('.message.loading').remove();
        $('<div class="message new fs-4"><figure class="avatar"><img src="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" /></figure>' + 'Xin lỗi, tôi không thể giúp bạn! \n Câu hỏi của bạn nằm ngoài hiểu biết của tôi.' + '</div>').appendTo($('.mCSB_container')).addClass('new');
        setDate();
        updateScrollbar();
    }
}

$(document).ready(function () {

});
