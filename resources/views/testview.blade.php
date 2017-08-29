<html>
@if(Auth::check())
    <p>如果你看到了这条消息，说明你登陆了,你的用户信息{{Auth::user()}}</p>
@else
    <p>如果你看到这条消息，说明你退出登录了 </p>
@endif
<?php
        $i=0;
foreach($testData as $test){
    $i+=1;
    ?>
<p>这里输出的是数据库里的第{{$i}}条数据：</p>
<p>{{$test->id}}</p>
<p>{{$test->info}}</p>

<?php
}
?>
<form action="testGet" method="post">
    <input type="hidden" name="testdata1" value="info in test data 1">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    {{--<input type="hidden" name="testdata2" value="info in test data 2">--}}
    <input type="submit">
</form>

<p>show testdata1, testdata2</p>
<p>{{$testdata1}}</p>

</html>