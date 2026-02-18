@extends('layouts.showlesson')
@section('content')
  <div class="top">
    <div>
      <div class="muted" style="font-size:12px;">Курс: Python старт</div>
      <h1>Уроки</h1>
      <x-flash-message />
    </div>
    <div class="actions">
      <a class="btn" href="{{ route('courses.index') }}">Назад</a>
      <a class="btn primary" href="{{ route('lessons.create', ['course'=>$course]) }}">Добавить урок</a>
      <a class="btn" href="{{ route('logout') }}">Выйти</a>
    </div>
  </div>
  <div class="card" style="margin-bottom:12px">
    <div class="cardbody">
      <div style="display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;align-items:center">
        <div>
          <div style="font-weight:700;">Ограничение</div>
          <div class="muted" style="font-size:12px;">В одном курсе не более 5 уроков</div>
        </div>
        <div class="pill">Сейчас:  0 / 5</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="cardbody">
      <table>
        <thead>
          <tr>
            <th>Заголовок</th>
            <th>Длительность</th>
            <th>Видео</th>
            <th>Действия</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($course->lessons as $lesson)

            <tr>
              <td>
                <div style="font-weight:700;">{{ $lesson->title }}</div>
                <div class="muted" style="font-size:12px;">{{ $lesson->content }}</div>
              </td>
              <td> {{ $lesson->duration }} </td>
              <td><a href="#" style="color:#2563eb;text-decoration:none;">{{ $lesson->supertube_url }}</a></td>
              <td>
                <div class="actions">
                  <a class="btn"
                    href="{{ route('lessons.edit', ['course' => $course, 'lesson' => $lesson]) }}">Редактировать</a>
                  <form class="form" action="{{ route('lessons.destroy', ['course' => $course, 'lesson'=>$lesson]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <button class="btn danger" type="submit">Удалить</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection