@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            Edit blog settings
        </div>
        <div class="panel-body">
            <form action="{{route('settings.update')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">اسم الموقع</label>
                    <input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">عنوان الشركة</label>
                    <input type="text" name="address" class="form-control" value="{{$settings->address}}">
                </div>
                <div class="form-group">
                    <label for="name">هاتف الشركة</label>
                    <input type="text" name="contact_number" class="form-control" value="{{$settings->contact_number}}">
                </div>
                <div class="form-group">
                    <label for="name">بريد الشركة الالكتروني</label>
                    <input type="text" name="contact_email" class="form-control" value="{{$settings->contact_email}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات الإقامة:</label>
                    <input type="text" name="iphone" class="form-control" value="{{$settings->iphone}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات الصناعات الحرفية</label>
                    <input type="text" name="iphone_b" class="form-control" value="{{$settings->iphone_b}}">
                </div>
                 <div class="form-group">
                    <label for="name"> خدمات الطعام والشراب:</label>
                    <input type="text" name="anderwed" class="form-control" value="{{$settings->anderwed}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات الاتصالات:</label>
                    <input type="text" name="anderwed_b" class="form-control" value="{{$settings->anderwed_b}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات الترفيهية: </label>
                    <input type="text" name="rebot" class="form-control" value="{{$settings->rebot}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات الثقافية:</label>
                    <input type="text" name="rebot_b" class="form-control" value="{{$settings->rebot_b}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات وكالات السفر:</label>
                    <input type="text" name="esay" class="form-control" value="{{$settings->esay}}">
                </div>
                <div class="form-group">
                    <label for="name"> خدمات الإقامة:</label>
                    <input type="text" name="esay_b" class="form-control" value="{{$settings->esay_b}}">
                </div>
                <div class="form-group">
                    <label for="name">الفوتر 1 </label>
                    <input type="text" name="amet" class="form-control" value="{{$settings->amet}}">
                </div>
                <div class="form-group">
                    <label for="name"> الفوتر 2</label>
                    <input type="text" name="amet_b" class="form-control" value="{{$settings->amet_b}}">
                </div>
                <div class="form-group">
                    <label for="name"> الفوتر 3</label>
                    <input type="text" name="amet_bo" class="form-control" value="{{$settings->amet_bo}}">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                           update site settings
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>

@stop