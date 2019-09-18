@extends('layouts.app')

@section('content')
    <div>
        <div class="text-center">
            <h1>Career</h1>
        </div>
    </div>
    <div class="row">
        <ul class="col-sm-6 list">
            <li class="list_top">プロフィール</li>
            <li>男</li>
            <li>1992年生まれ</li>
            <li>2011年3月 大阪府立堺西高等学校 卒業</li>
            <li>2011年4月 近畿大学生物理工学部生物工学科 入学</li>
            <li>2015年3月 近畿大学生物理工学部生物工学科 卒業</li>
            <li>2015年4月-2019年9月 某中小企業で洗浄剤の開発</li>
            <li>now</li>
        </ul>
        <ul class="col-sm-6 list">
            <li class="list_top">スキル</li>
            <li>洗浄剤の開発</li>
            <li>　金属用、洗濯用などなど</li>
            <li>プログラミング(HTML/CSS/PHP)</li>
            <li>　TechAcademyにて勉強した程度</li>
            <li>　Laravel使えます</li>
            <li>以上</li>
        </ul>
    </div>
    <div class="return">
        <a href="/">戻る</a>
    </div>
@endsection