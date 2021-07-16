$(function () {

    for (var ctrlr of ['PendudukAnakYatim', 'PendudukUsaha', 'PendudukTernak', 'PendudukKendaraan', 'PendudukCacat']) {
        var inputName = ctrlr.toLowerCase().replace('penduduk', 'ada_')
        var inputValue = $(`[name="${inputName}"]`).val()
        var isYa = 'Ya' === inputValue ? 'checked' : ''
        var isTidak = 'Tidak' === inputValue ? 'checked' : ''
        $(`[data-controller="${ctrlr}"]`).parent().parent().find('H4').append(`
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="${inputName}_Ya" ${isYa}> Ya
            &nbsp;&nbsp;<input type="radio" id="${inputName}_Tidak" ${isTidak}> Tidak
        `)
        if (isYa) $(`[data-controller="${ctrlr}"] .btn-add`).show()
        else $(`[data-controller="${ctrlr}"] .btn-add`).hide()
    }

    $('H4 :radio').click(function () {
        var id = $(this).attr('id')
        var input = id.replace('_Ya', '').replace('_Tidak', '')
        var val = id.replace(`${input}_`, '')
        $(`[id^="${input}"]`).not($(this)).prop('checked', false)
        $(`[name="${input}"]`).val(val)
        if ('Ya' === val) {
            $(this).parent().parent().parent().find('.btn-add').show()
        } else if ('Tidak' === val) {
            $(this).parent().parent().parent().find('.btn-add').hide()
            $(this).parent().parent().parent().find('.btn-delete').click()
        }
    })
})