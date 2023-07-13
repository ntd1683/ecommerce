import $ from 'jquery';

$(function () {
    $('#verify_email').click(() => {
        $('#submit_email_verify').click(() => {
            let form = $('#form_verify_email');
            let url = form.attr('action');
            let formData = form.serializeArray();
            const loading = $('#loading_verify_email');

            loading.removeClass('hidden');

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function (data) {
                    $('.btn-close').click();
                    loading.addClass('hidden');
                    toasting.create({
                        "title": "Success",
                        "text": `${data.message}`,
                        "type": "success",
                        "progressBarType": "rainbow"
                    });
                },
                error: function (data) {
                    $('.btn-close').click();
                    loading.addClass('hidden');
                    toasting.create({
                        "title": "Error",
                        "text": `${data.message + ' ' + data.responseJSON.message}`,
                        "type": "error",
                        "progressBarType": "rainbow"
                    })
                }
            })
        })
    })
})
