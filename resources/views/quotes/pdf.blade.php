<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>So Genius I/O Quote Request</title>
    {{ Html::style('/bower_components/bootstrap-css/css/bootstrap.min.css') }}
    <style>
      img {
        width: 80px;
      }
      ol li {
        list-style-type: none;
      }
    </style>
</head>

<body>
    {{ Html::image('/images/atom-colored.svg', 'So Genius Logo', array('class' => 'img-responsive')) }}
    <h1>Quote request</h1>
    <h3>Website development</h3>
    <h3 class="header">Contact Information</h3>
    <p>{{$firstname}}</p>
    <p class="salutation">Hello {{ $salutation[0] = ($salutation[0] != 'null') ? ucwords($salutation[0]) : "" }}{{ ucwords($firstname) }} {{ucwords($lastname) }},</p>
    <p>Your quote request was successfully processed on {{ Carbon\Carbon::now()->toFormattedDateString() }}. The request number (#{{$quoteid}}) has been assigned to your project. Below are your responses:</p>
    <table class="table">
        <thead>
            <tr>
                <th>
                    QUESTIONS
                </th>
                <th>
                    RESPONSE
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Completion date:
                </td>
                <td>
                    {{$month}} / {{$year}}
                </td>
            </tr>
            <tr>
                <td>
                    Budget range:
                </td>
                <td>
                    {{$budgetrange}}
                </td>
            </tr>
            <h3 class="header">Features and functions</h3>
            <tr>
                <td>
                    Functionality needed for website
                </td>
                <td>
                    <ol>
                        @foreach ($service as $s)
                        <li>{{$s}}</li>
                        @endforeach
                    </ol>
                </td>
            </tr>
            <tr>
                <td>
                    Design needs
                </td>
                <td>
                    <ol>
                        @foreach ($designitem as $d)
                        <li>{{$d}}</li>
                        @endforeach
                    </ol>
                </td>
            </tr>
            <tr>
                <td>
                    Competitors
                </td>
                <td>
                    {{ $competitors }}
                </td>
            </tr>
            <tr>
                <td>
                    Registrar
                </td>
                <td>
                    {{ $registrar }}
                </td>
            </tr>
            <tr>
                <td>
                    Hosting
                </td>
                <td>
                    {{ $hosting }}
                </td>
            </tr>
            <tr>
                <td>
                    What you need?
                </td>
                <td>
                    {{ $siteneeds }}
                </td>
            </tr>
            <tr>
                <td>
                    Updates
                </td>
                <td>
                    {{ $updates }}
                </td>
            </tr>
            <tr>
                <td>
                    Content Management System (CMS) of choice
                </td>
                <td>
                    {{ $cms[0] }}
                </td>
            </tr>
            <tr>
                <td>
                    Other CMS
                </td>
                <td>
                    {{ $othercms }}
                </td>
            </tr>
            <tr>
                <td>
                    Audience
                </td>
                <td>
                    {{ $audience }}
                </td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <p>Thank you for submitting. We will be in touch shortly with the next steps.</p>
    </div>
    <footer>
        <h5>So Genius I/O © 2016</h5>
    </footer>
</body>

</html>
