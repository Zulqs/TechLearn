<!DOCTYPE html>
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
</html>