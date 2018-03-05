<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Test paginations</title>
</head>
<body>
<div id="page-content"></div>
<div id="pagination-demo"></div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.twbsPagination.min.js"></script>
<script>
  var json = JSON.parse('{!! json_encode($arr, JSON_UNESCAPED_UNICODE)  !!}');
  var perPage = 2;
  var totalPages = Math.ceil(json.length / perPage);
  $('#pagination-demo').twbsPagination({
    totalPages: totalPages,
    visiblePages: 5,
    onPageClick: function (event, page) {
      var start = (page - 1) * perPage;
      var content = json.slice(start, start + perPage);
      $('#page-content').html(content.join(' '));
    }
  });
</script>
</body>
</html>