

  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>So Genius I/O Quote Request</title>
      <style media="screen">

      body {
        font-family: Arial, sans-serif;
        font-size: 14px;
      }

      h3.header {
        border-bottom: 1px solid #131313;
      }

      h1 {
        margin-bottom: 10px;
        padding-bottom: 0;
      }

      </style>

    </head>

  <body>

      <img width="200px" src="http://i.imgur.com/8kkOZQw.png" alt="So Genius I/O logo">

      <h1>Quote request</h1>
      <h3>Website development</h3>

      <h3 class="header">Contact Information</h3>
      {{-- <p>{{$firstname}}</p> --}}
        {{-- <p class="salutation">Hello {{ $salutation[0] = ($salutation[0] != 'null') ? ucwords($salutation[0]) : "" }}{{ ucwords($firstname) }} {{ucwords($lastname) }},</p> --}}
        {{-- <p>Your quote request was successfully processed on {{ date('F d, Y', strtotime($submitted_at)) }}. The request number (#{{$quoteid}}) has been assigned to your project. Below are your responses:</p> --}}
        {{-- <h5><small>{{$salutation[0]}}</small></h5> --}}
      <h3>First Name: </h3><span>{{$firstname}}</span>
      <h3>Last Name: </h3><span>{{$lastname}} {{$suffix}}</span>
      <h3>Email: </h3><span>{{$email}}</span>
      <h3>Phone: </h3><span>{{$phone}}</span>
      <h3>Completion Date: </h3><span>{{$month}} / {{$year}}</span>
      <h3>Budget Range: </h3><span>{{$budgetrange}}</span>

      <h3 class="header">Features and functions</h3>

      <table class="table">
          <thead>
              <tr>
                  <th>Question</th>
                  <th>Response</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Functionality needed for website:</td>
                  <td>
                    <ol>
                      @foreach ($service as $s)
                        <li>{{$s}}</li>
                      @endforeach
                    </ol>
                  </td>
              </tr>
              <tr>
                  <td>Design needs:</td>
                  <td>
                    <ol>
                      @foreach ($designitem as $d)
                        <li>{{$d}}</li>
                      @endforeach
                    </ol>
                  </td>
              </tr>
              <tr>
                  <td>Competitors:</td>
                  <td>{{$competitors}}</td>
              </tr>
              <tr>
                  <td>Registrar</td>
                  <td>{{$registrar}}</td>
              </tr>
              <tr>
                  <td>Hosting</td>
                  <td>{{$hosting}}</td>
              </tr>
              <tr>
                  <td>What you need:</td>
                  <td>{{$siteneeds}}</td>
              </tr>
              <tr>
                  <td>Registrar</td>
                  <td>{{$registrar}}</td>
              </tr>
              <tr>
                  <td>Updates:</td>
                  <td>{{$updates}}</td>
              </tr>
              <tr>
                  <td>CMS of choice:</td>
                  <td>{{$cms[0]}}</td>
              </tr>
              <tr>
                  <td>Updates:</td>
                  <td>{{$updates}}</td>
              </tr>
              <tr>
                  <td>Other CMS:</td>
                  <td>{{$othercms}}</td>
              </tr>
              <tr>
                  <td>Audience:</td>
                  <td>{{$audience}}</td>
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
