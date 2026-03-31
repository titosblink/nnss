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
                    <div class="subtitle"><b>SENIOR SEC. SCH. TERMINAL REPORT FOR 1ST TERM</b></div>
                    <div class="subtitle">TERM ENDS: 2nd Term | NEXT TERM BEGINS: 2nd Aug 26</div>
                </td>

                <td style="width: 15%"> <img
                        src="{{ $ppt ? asset('passport/' . $ppt) : asset('assets/img/passport.jpeg') }}" alt="Logo"
                        style="height: 80px; width: 80px; border-radius: 50%;"></td>
            </tr>
        </table>

        <br>

        <!-- STUDENT DETAILS -->
        <table>
            <tr class="section">
                <td colspan="6">DETAILS</td>
            </tr>

            <tr>
                <td><b>Name:</b>{{ $fullname }}</td>
                <td><b>Reg No:</b>{{ $studid }}</td>
                <td><b>Class:</b> {{ $clas }}</td>
            </tr>

            <tr>
                <td><b>Arm:</b> {{ $clas }}</td>
                <td><b>Average:</b> Student Ave %</td>
                <td><b>Gender:</b>{{ $Students->gender }}</td>
            </tr>
        </table>

        <br>

        <!-- COGNITIVE DOMAIN -->
        <table>
            <tr class="section">
                <td colspan="10">COGNITIVE DOMAIN</td>
            </tr>

            <tr>
                <th>Subjects</th>
                <th class="rotate">1st Test</th>
                <th class="rotate">2nd Test</th>
                <th class="rotate">Exam</th>
                <th class="rotate">Total</th>
                <th class="rotate">Grade</th>
                <th class="rotate">Position</th>
                <th class="rotate">Class Avg</th>
                <th>Remarks</th>
            </tr>
            @foreach ($StudentsResult as $StudentsResult)
                <tr>
                    <td>{{ $StudentsResult->subject }}</td>
                    <td>{{ $StudentsResult->firsttest }}</td>
                    <td>{{ $StudentsResult->secondtest }}</td>
                    <td>{{ $StudentsResult->exam }}</td>
                    <td>{{ $StudentsResult->total }}</td>
                    <td>{{ $StudentsResult->grade }}</td>
                    <td>{{ $StudentsResult->sbjposi }}</td>
                    <td>{{ $StudentsResult->classave }}</td>
                    <td>{{ $StudentsResult->remark }}</td>

                </tr>
            @endforeach

        </table>

        <br>

        <!-- GRADING -->
        <table>
            <tr>
                <td class="small">
                    A1: 75-100 | B2: 70-74 | B3: 65-69 | C4: 60-64 |
                    C5: 55-59 | C6: 50-54 | D7: 45-49 |
                    E8: 40-44 | F9: 0-39
                </td>
            </tr>
        </table>
        <br>
        <table style="width:100%; border-collapse:collapse; font-size:11px;">

            <!-- HEADER -->
            <tr style="background:#ddd; font-weight:bold;">
                <td colspan="8" style="border:1px solid #000; text-align:center;">
                    AFFECTIVE DOMAIN
                </td>
                <td colspan="2" style="border:1px solid #000; text-align:center;">
                    PSYCHOMOTOR DOMAIN
                </td>
            </tr>

            <!-- SUB HEADERS -->
            <tr style="font-weight:bold;">
                <td colspan="2" style="border:1px solid #000; text-align:center;">
                    Punctuality & Regularity
                </td>
                <td colspan="6" style="border:1px solid #000; text-align:center;">
                    Personality
                </td>
                <td colspan="2" style="border:1px solid #000; text-align:center;">
                    Psychomotor Domain
                </td>
            </tr>

            <!-- ROW 1 -->
            <tr>
                <td style="border:1px solid #000;">Days Opened:</td>
                <td style="border:1px solid #000;">{{ $affective->days_opened ?? 34 }}</td>

                <td style="border:1px solid #000;">Puntuality</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->punctuality }}</td>

                <td style="border:1px solid #000;">Respect:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->obedience }}</td>

                <td style="border:1px solid #000;">Responsibility</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->cooperation }}</td>

                <td style="border:1px solid #000;">Fluency</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->fluency }}</td>
            </tr>

            <!-- ROW 2 -->
            <tr>
                <td style="border:1px solid #000;">Days Present:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->attendance ?? 0 }}</td>

                <td style="border:1px solid #000;">Neatness:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->neatness }}</td>

                <td style="border:1px solid #000;">Friendliness:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->friendliness }}</td>

                <td style="border:1px solid #000;">Attentiveness:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->attentiveness }}</td>

                <td style="border:1px solid #000;">Sports:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->sports }}</td>
            </tr>

            <!-- ROW 3 -->
            <tr>
                <td style="border:1px solid #000;">Days Absent:</td>
                <td style="border:1px solid #000;">{{ 34 - $Psychomotor->attendance ?? 0 }}</td>

                <td style="border:1px solid #000;">Leadership:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->leadership }}</td>

                <td style="border:1px solid #000;">Obedience:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->obedience }}</td>

                <td style="border:1px solid #000;">Initiative:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->initiative }}</td>

                <td style="border:1px solid #000;">Cultural:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->cultural }}</td>
            </tr>

            <!-- ROW 4 -->
            <tr>
                <td style="border:1px solid #000;"></td>
                <td style="border:1px solid #000;"></td>

                <td style="border:1px solid #000;">Demeanor:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->demeanor }}</td>

                <td style="border:1px solid #000;">Self-Control:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->selfcontrol }}</td>

                <td style="border:1px solid #000;">Organization</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->organisation }}</td>

                <td style="border:1px solid #000;">Technical</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->technical }}</td>
            </tr>

            <!-- ROW 5 -->
            <tr>
                <td style="border:1px solid #000;"></td>
                <td style="border:1px solid #000;"></td>

                <td style="border:1px solid #000;">Honesty:</td>
                <td style="border:1px solid #000;">{{ $affective->honesty ?? 5 }}</td>

                <td style="border:1px solid #000;">Cooperation:</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->cooperation }}</td>

                <td style="border:1px solid #000;">Perseverance</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->perseverance }}</td>

                <td style="border:1px solid #000;">Labour</td>
                <td style="border:1px solid #000;">{{ $Psychomotor->labour }}</td>
            </tr>

        </table>

        <br>
        <!-- COMMENT -->
        <table class="no-border">
            <tr>
                <td class="left">
                    <b>Commandant's Comment:</b>
                    <u>{{ $Psychomotor->prin_comm }}</u>
                </td>

                <td class="left">
                    <b>Signature: _______________________________________</b>
                </td>
            </tr>
        </table>

    </div>

</body>

</html>

<script>
    window.onload = function() {
        window.print();
    }
</script>
