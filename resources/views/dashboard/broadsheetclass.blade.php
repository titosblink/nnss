<!DOCTYPE html>
<html>

<head>
    <title>Report Sheet</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
        }

        .container {
            width: 1000px;
            margin: auto;
            border: 2px solid #000;
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #000;
            padding: 3px;
            text-align: center;
        }

        .no-border td {
            border: none;
        }

        .header-table td {
            border: none;
        }

        .logo {
            width: 80px;
        }

        .title {
            font-weight: bold;
            font-size: 16px;
        }

        .subtitle {
            font-size: 11px;
        }

        .section {
            background: #ddd;
            font-weight: bold;
        }

        .left {
            text-align: left;
        }

        .rotate {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            font-size: 10px;
        }

        .small {
            font-size: 10px;
        }

        .remark-pass {
            color: blue;
        }

        .remark-excellent {
            color: green;
        }

        .remark-fail {
            color: red;
        }

        .footer-line {
            border-bottom: 1px solid #000;
            display: inline-block;
            width: 70%;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <table class="header-table">
            <tr>
                <td style="width: 10%;">
                    <img src="{{ asset('assets/img/logo.png') }}" class="logo">
                </td>

                <td style="text-align: center;">
                    <div class="title">NIGERIAN NAVY SECONDARY SCHOOL OGBOBOSO</div>
                    <div class="subtitle">IRE-AAPA, PMB 4011 OGBOMOSO, OYO STATE</div>
                    <div class="subtitle"><b>JUNIOR SEC. SCH. 1ST TERM REPORT</b></div>
                    <div class="subtitle">2025/2026 ACADEMIC SESSION</div><br>
                    <div class="subtitle">FIRST TERM BROADSHEET FOR {{ $classnamely }}</div>
                </td>

                <td style="width: 10%;">
                    <img src="{{ asset('assets/img/logo.png') }}" class="logo">
                </td>
            </tr>
        </table>

        <br>

        <!-- COGNITIVE DOMAIN -->
        <table border="1" style="width: 100%; text-align: center; border-collapse: collapse;">
            <thead>

                <tr>
                    <th colspan="{{ count($availableSubjects) + 6 }}">REPORT SHEET</th>
                </tr>
                <tr>
                    <th>S/N</th>
                    <th>Student Name</th>
                    {{-- Loop for Subject Headers --}}
                    @foreach ($availableSubjects as $subject)
                        <th style="writing-mode: vertical-rl; text-orientation: mixed;">
                            {{ $subject }}
                        </th>
                    @endforeach
                    <th style="writing-mode: vertical-rl; text-orientation: mixed;">No of Subjects</th>
                    <th style="writing-mode: vertical-rl; text-orientation: mixed;">Total</th>
                    <th style="writing-mode: vertical-rl; text-orientation: mixed;">Average</th>
                    <th style="writing-mode: vertical-rl; text-orientation: mixed;">Position</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($broadsheet as $index => $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- Student Full Name --}}
                        <td>{{ $student->surname }} {{ $student->othername }}</td>

                        {{-- Dynamic Subject Scores --}}
                        @foreach ($availableSubjects as $subject)
                            <td>{{ $student->$subject }}</td>
                        @endforeach

                        {{-- Aggregated Totals --}}
                        <td>{{ $student->no_of_subjects }}</td>
                        <td>{{ $student->total_score }}</td>
                        <td>{{ number_format($student->average_score, 2) }}</td>
                        <td>{{ $index + 1 }}</td>
                    </tr>
                @endforeach
            </tbody>


        </table>
        <table border="1" style="width: 100%; text-align: center; border-collapse: collapse; margin-top: 20px;">
            <tbody>
                {{-- Row for Subject Averages --}}
                <tr style="font-weight: bold; background-color: #f0f0f0;">
                    <td></td>
                    <td>SUBJECT AVERAGES</td>
                    @foreach ($availableSubjects as $subject)
                        <td style="writing-mode: vertical-rl; text-orientation: mixed;">{{ $subject }} -
                            {{ number_format($subjectSummaries[$subject]['average'], 0) }}</td>
                    @endforeach
                </tr>

                {{-- Rows for Grade Distribution --}}
                @foreach (['A', 'B', 'C', 'P', 'F9'] as $grade)
                    <tr>
                        <td></td>
                        <td>{{ $grade }}</td>
                        @foreach ($availableSubjects as $subject)
                            <td>{{ $subjectSummaries[$subject][$grade] }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>



    </div>

</body>

</html>

<script>
    window.onload = function() {
        window.print();
    }
</script>
