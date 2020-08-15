define(function () {
  $.seq = function () {
    // 优化, 允许后台输出一定数量的ID,待用完时,再次向后台申请一批ID,减少请求,提高速度
    var id = null;
    $.ajax({
      async: false,
      url: $.url('admin/seq/create'),
      dataType: 'json',
      success: function (result) {
        id = result.id;
      },
    });
    return id;
  };
});
