<!-- <!DOCTYPE html>
<html>
<head>
    <title>Hasil Kuis</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Hasil Kuis {{ $tag }}</h1>
    <p>Jumlah Jawaban Benar: {{ $correctAnswers }}</p>
    <p>Total Soal: {{ $totalQuestions }}</p>
    <p>Skor Anda: {{ ($correctAnswers / $totalQuestions) * 100 }}%</p>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Kuis {{$tag}}</title>
<style>
	.title {
    flex: 1;
    text-align: left;
    border-bottom: 2px solid black;
   	padding-bottom: 5px;
  	}
      .title-container {
    display: flex;
    align-items: center;
  }
  .image {
    margin-left: 180px; /* Adjust the margin as needed */
    max-width: 100px;
    height: auto;

  }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    .result {
        margin-top: 20px;
        border-collapse: collapse;
        width: 100%;
    }
    .result td, .result th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .result th {
        background-color: #f2f2f2;
    }
    .result tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .result tr:hover {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>


    <div class="container">
    <h1 class="title">Hasil Kuis {{ $tag }}
        <img src="https://i.ibb.co.com/gZ5Ds3R/3.png" alt="Image" class="image">
    </h1>
    <p>Hai, {{ Auth::user()->name }}!</p>
    <p>Berikut adalah hasil Kuis {{ $tag }} Anda.</p>
    <p>Jumlah Jawaban Benar: {{ $correctAnswers }}</p>
    <p>Total Soal: {{ $totalQuestions }}</p>
    <table class="result">
        <tr>
            <th>No</th>
            <th>Course</th>
            <th>Skor</th>
            <th>Durasi</th>
            <th>Waktu</th>
        </tr>
        <tr>
            <td>1</td>
            <td>{{ $tag }} Exam</td>
            <td>{{ ($correctAnswers / $totalQuestions) * 100 }}%</td>
            <td>{{$duration}}</td>
            <td><ol>
            <dd class="text-gray-700 sm:col-span-2">Mulai: {{$startTime}}</dd> 
            <dd class="text-gray-700 sm:col-span-2">Selesai: {{$endTime}}</dd></ol></td>
        </tr>

    </table>
    <p class="text-gray-600 text-xs italic my-2">Quiz diakses pada {{$startTime}}.
</div>
</body>
</html>
