<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>Edit Course</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
        <label for="name">Course Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $course->name) }}" required>
        </div>
        <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $course->description) }}</textarea>
        </div>
        <div class="form-group">
        <label for="total_grade">Total Grade</label>
        <input type="number" step="0.01" name="totalGrade" class="form-control" value="{{ old('totalGrade', $course->totalGrade) }}" required>
        </div>
        <x-btn-component type="primary">
            Update Course
          </x-btn-component>
          <x-a-component type="success" locate="{{ route('courses.index') }}">
    Back to List
</x-a-component>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
