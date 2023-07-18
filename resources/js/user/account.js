import $ from 'jquery';
import select2 from 'select2';

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

$(document).ready(function () {
    $('.select-2-province').select2({
        ajax: {
            url: $('#url_province').val(),
            type: 'get',
            dataType: 'json',
            data: function (params) {
                return {
                    province: params.term
                };
            },
            processResults: function (data, params) {
                return {
                    results: $.map(data.data, function (item) {
                        $('#province').val(item.ProvinceName);
                        return {
                            text: item.ProvinceName,
                            id: item.ProvinceID,
                            data: item
                        };
                    })
                };
            }
        }
    });

    $('.select-2-district').select2({
        ajax: {
            url: $('#url_district').val(),
            type: 'get',
            dataType: 'json',
            data: function (params) {
                return {
                    province: $('#province_id').val(),
                    district: params.term
                };
            },
            processResults: function (data, params) {
                return {
                    results: $.map(data.data, function (item) {
                        $('#district').val(item.DistrictName);
                        return {
                            text: item.DistrictName,
                            id: item.DistrictID,
                            data: item
                        };
                    })
                };
            }
        }
    });

    $('.select-2-ward').select2({
        ajax: {
            url: $('#url_ward').val(),
            type: 'get',
            dataType: 'json',
            data: function (params) {
                return {
                    province: $('#province_id').val(),
                    district: $('#district_id').val(),
                    ward: params.term
                };
            },
            processResults: function (data, params) {
                return {
                    results: $.map(data.data, function (item) {
                        $('#ward').val(item.WardName);
                        console.log($('#ward').val);
                        return {
                            text: item.WardName,
                            id: item.WardCode,
                            data: item
                        };
                    })
                };
            }
        }
    });
});
