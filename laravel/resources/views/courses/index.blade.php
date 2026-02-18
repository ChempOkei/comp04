@extends('layouts.index')
@section('content')


  <div class="top">
    <div>
      <div class="muted" style="font-size:12px;">Список курсов</div>
      <h1>Курсы</h1>
      <x-flash-message />
    </div>
    <div class="actions">
      <a class="btn primary" href="{{ route('courses.create') }}">Создать курс</a>
      <a class="btn" href="{{ route('logout') }}">Выйти</a>
    </div>
  </div>
  <div class="card">
    <div class="cardbody">
      <table>
        <thead>
          <tr>
            <th>Обложка</th>
            <th>Название</th>
            <th>Даты</th>
            <th>Часы</th>
            <th>Цена</th>
            <th>Действия</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courses as $course)
            <tr>
              <td><img class="thumb" src="{{ Storage::url($course->image_url) }}" alt=""></td>
              <td>
                <div style="font-weight:700;">{{ $course->course_name }}</div>
                <div class="muted" style="font-size:12px;">{{ $course->description }}</div>
              </td>
              <td>
                <div>{{ $course->start_date }}</div>
                <div class="muted" style="font-size:12px;">—</div>
                <div>{{ $course->end_date }}</div>
              </td>
              <td>{{ $course->duration }}</td>
              <td>{{ $course->price }}</td>
              <td>
                <div class="actions">
                  <a class="btn" href="{{ route('courses.show', ['course' => $course]) }}">Уроки</a>
                  <a class="btn" href="{{ route('courses.edit', ['course' => $course]) }}">Редактировать</a>
                  <form class="form" action="{{ route('courses.destroy', ['course' => $course]) }}" method="post"
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
      <div class="pagination" aria-label="Пагинация">
        <a class="page active" href="#">1</a>
        <a class="page" href="#">2</a>
        <a class="page" href="#">3</a>
      </div>
      <div class="muted" style="font-size:12px;margin-top:8px;">По 5 курсов на страницу</div>
    </div>
  </div>
@endsection