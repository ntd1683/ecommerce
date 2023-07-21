import $ from 'jquery';
import select2 from 'select2';

$(document).ready(function () {
    let productCategory = $('#select-2-product-category');
    productCategory.select2({
        ajax: {
            url: productCategory.data('ajax'),
            type: 'get',
            dataType: 'json',
            data: function (params) {
                return {
                    q: params.term
                };
            },
            processResults: function (data, params) {
                return {
                    results: $.map(data.data, function (item) {
                        return {
                            text: item.name,
                            id: item.id,
                            data: item
                        };
                    })
                };
            }
        }
    });

    let discount = $('#select-2-discount');
    discount.select2({
        ajax: {
            url: discount.data('ajax'),
            type: 'get',
            dataType: 'json',
            data: function (params) {
                return {
                    q: params.term
                };
            },
            processResults: function (data, params) {
                return {
                    results: $.map(data.data, function (item) {
                        return {
                            text: item.code,
                            id: item.id,
                            data: item
                        };
                    })
                };
            }
        }
    });
});
