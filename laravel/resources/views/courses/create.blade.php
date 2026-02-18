@extends('layouts.create')
@section('content')
      <div class="top">
        <div>
          <div class="muted" style="font-size:12px;">Создание курса</div>
          <h1>Новый курс</h1>
        </div>
        <div class="actions">
          <a class="btn" href="{{ route('courses.index') }}">Назад</a>
          <a class="btn" href="{{ route('logout') }}">Выйти</a>
        </div>
      </div>
      <div class="card">
        <div class="cardbody">
          <form class="form" action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
          <x-flash-message />
          @csrf
            <div class="grid">
              <div class="" id="nameField">
                <x-form-input label="Название курса" name="course_name"  />
                <div class="help">Обязательно, максимум 30 символов</div>
                
              </div>
              <div class="" id="hoursField">
                <x-form-input label="Продолжительность (часы)" name="duration" type="number"  />
                <div class="help">Обязательно, целое число не больше 10</div>
                
              </div>
            </div>
            <div class="grid">
              <div class="" id="priceField">
                <x-form-input label="Цена" name="price" type="number" />
                <div class="help">Обязательно, формат xx.xx, не менее 100</div>
              </div>
              <div class="" id="imgField">
                <x-form-input label="Обложка (JPG)" name="image_url" type="file" />
                <div class="help">Обязательно при создании, JPG/JPEG, максимум 2000 Кб</div>

              </div>
            </div>
            <div class="grid">
              <div class="" id="startDateField">
                <x-form-input label="Дата начала" name="start_date" type="date" />
                <div class="help">Обязательно, формат дд-мм-гггг</div>

              </div>
              <div class="" id="endDateField">
              <x-form-input label="Дата окончания" name="end_date" type="date" />
                <div class="help">Обязательно, формат дд-мм-гггг</div>

              </div>
            </div>
            <div class="" id="descriptionField">
              <label for="description">Описание</label>
              <textarea id="description" name="description" maxlength="100"></textarea>
              <div class="help">Необязательно, максимум 100 символов</div>

            </div>
            <div class="actions">
              <button class="btn primary" type="submit">Создать</button>
              <a class="btn" href="{{ route('courses.index') }}">Отмена</a>
            </div>
          </form>
        </div>
      </div>
@endsection

