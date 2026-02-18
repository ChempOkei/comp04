@extends('layouts.createlessons')

@section('content')


  <div class="top">
    <div>
      <div class="muted" style="font-size:12px;">Курс: {{ $course->course_name }}</div>
      <h1>Новый урок</h1>
    </div>
    <div class="actions">
      <a class="btn" href="{{ route('courses.show', ['course'=>$course]) }}">Назад</a>
      <a class="btn" href="{{ route('logout') }}">Выйти</a>
    </div>
  </div>
  <div class="card">
    <div class="cardbody">
      <form class="form" action="{{ route('lessons.store', ['course'=>$course]) }}" method="post">
      @csrf
      <x-flash-message />
        <div class="" id="titleField">
          <x-form-input label="Заголовок" name="title" type="text" />
          <div class="help">Обязательно, максимум 50 символов</div>
        </div>
        <div class="grid">
          <div class="" id="hoursField">
            <x-form-input label="Длительность (часы)" name="duration" type="number" />

            <div class="help">Обязательно, целое число, не более 4 часов</div>

          </div>
          <div class="" id="videoField">
            <x-form-input label="Видеоссылка SuperTube" name="supertube_url" type="url" />

            <div class="help">Необязательно, валидная ссылка</div>

          </div>
        </div>
        <div class="" id="contentField">
          <x-form-input label="Текстовое содержание" name="content" type="text" />

          <div class="help">Обязательно</div>

        </div>
        <div class="actions">
          <button class="btn primary" type="submit">Создать</button>
          <a class="btn" href="lessons-list.html">Отмена</a>
        </div>
      </form>
    </div>
  </div>
@endsection