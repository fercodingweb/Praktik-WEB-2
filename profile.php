<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: rgb(9, 45, 50);
        }

        .ring {
            position: absolute;
            width: 500px;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }

        .ring i {
            position: absolute;
            inset: 0;
            border: 2px solid #fff;
            transition: 0.5s;
        }

        .ring i:nth-child(1) {
            border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
            animation: animate 6s linear infinite;
        }

        .ring i:nth-child(2) {
            border-radius: 41% 44% 56% 59%/38% 62% 63% 37%;
            animation: animate 4s linear infinite;
        }

        .ring i:nth-child(3) {
            border-radius: 41% 44% 56% 59%/38% 62% 63% 37%;
            animation: animate2 10s linear infinite;
        }

        .ring:hover i {
            border: 6px solid var(--clr);
            filter: drop-shadow(0 0 20px var(--clr));
        }

        .profile-card {
            position: relative;
            width: 270px;
            /* diperkecil dari 350px */
            background: rgba(255, 255, 255, 0.08);
            border-radius: 30px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            padding: 30px 18px 20px 18px;
            /* padding diperkecil */
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            z-index: 2;
        }

        .profile-card img {
            width: 100px;
            /* diperkecil dari 140px */
            height: 100px;
            margin-bottom: 8px;
        }

        .profile-card table {
            width: 100%;
            color: #fff;
            font-size: 1rem;
            margin-top: 10px;
        }

        .profile-card td {
            padding: 6px 0;
        }

        .profile-card td.label {
            text-align: right;
            width: 50%;
        }

        .profile-card td.value {
            text-align: left;
            width: 50%;
        }

        .profile-card strong {
            color: #fff172;
        }

        .profile-card h2 {
            color: #fff;
            font-size: 2rem;
            margin-bottom: 0;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate2 {
            0% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
</head>

<body>
    <div class="ring">
        <i style="--clr:#60ff60;"></i>
        <i style="--clr:#a454ef;"></i>
        <i style="--clr:#ff0000;"></i>
        <div class="profile-card">
            <img src="img/IMG_20221228_113111_098.jpg" alt="Feriadi">
            <h2>Feriadi</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="label"><strong>NPM :</strong></td>
                        <td class="value">2310010046</td>
                    </tr>
                    <tr>
                        <td class="label"><strong>Fakultas / Program Studi :</strong></td>
                        <td class="value">Teknologi Informasi / Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td class="label"><strong>Tempat, Tanggal Lahir :</strong></td>
                        <td class="value">Muara Pulau , 18 September 2004</td>
                    </tr>
                    <tr>
                        <td class="label"><strong>Telepon :</strong></td>
                        <td class="value">082293951651</td>
                    </tr>
                    <tr>
                        <td class="label"><strong>Email :</strong></td>
                        <td class="value">ferf0517@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>