<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')
        <script id="container" name="{{$name}}" type="text/plain">
{{--            {!! old($column, $value) !!}--}}
            {!! $value !!}
        </script>
{{--        <div id="container" {!! $attributes !!} style="width: 100%; height: 100%;">--}}
{{--            <p>{!! $value !!}</p>--}}
{{--        </div>--}}

{{--        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />--}}

        @include('admin::form.help-block')

    </div>
</div>


<!-- 实例化编辑器 -->
<script require="@ueditor" type="text/javascript">
    // console.log(window.UE)
    // $(function () {
        var ue = UE.getEditor('container');
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    // })

</script>

<!-- 编辑器容器 -->
<!--<script id="container" name="content" type="text/plain"></script>-->
