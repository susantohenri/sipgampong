window.onload = function () {

  for (var th in thead) {
    $('.table-model tfoot tr').append('<th></th>')
  }

  var footer = []
  var table_model = $('.table-model').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: current_controller_url + '/dt', type: 'POST', dataSrc: function (data) {
        footer = data.footer
        return data.data
      }
    },
    columns: thead
  })

  $('.btn-filter').click(function () {
    var filter_jurong = $('#filter_jurong').val()
    var filter_rt = $('#filter_rt').val()
    var new_url = `${current_controller_url}/dt?filter_jurong=${filter_jurong}&filter_rt=${filter_rt}`
    table_model.ajax.url(new_url).load()
  })
}