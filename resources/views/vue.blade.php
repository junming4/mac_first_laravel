<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div id='app'>
    <!-- 準備給 Vue 的掛載點 -->
    <div id="app">
        <!-- 使用我們建立的元件，
             一個有傳入名字，一個沒有 -->
        <Hello name="Tony"></Hello>
        <Hello></Hello>

    </div>
</div>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="{{ asset('js/hello.js') }}" charset="utf-8"></script>
</body>
</html>
