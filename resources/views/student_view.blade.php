<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Data</title>
  <style>
        body{
          background-color:#94b8b8;
        }
        table { 
                width: 80%; 
                border-collapse: collapse; 
                margin:50px auto;
                }

              /* Zebra striping */
              tr:nth-of-type(odd) { 
                background: #eee; 
                }

              th { 
                background: #3498db; 
                color: white; 
                font-weight: bold; 
                }

              td, th { 
                padding: 10px; 
                border: 1px solid #ccc; 
                text-align: left; 
                font-size: 18px;
                }

              /* 
              Max width before this PARTICULAR table gets nasty
              This query will take effect for any screen smaller than 760px
              and also iPads specifically.
              */
              @media 
              only screen and (max-width: 760px),
              (min-device-width: 768px) and (max-device-width: 1024px)  {

                table { 
                    width: 100%; 
                }

                /* Force table to not be like tables anymore */
                table, thead, tbody, th, td, tr { 
                  display: block; 
                }
                
                /* Hide table headers (but not display: none;, for accessibility) */
                thead tr { 
                  position: absolute;
                  top: -9999px;
                  left: -9999px;
                }
                
                tr { border: 1px solid #ccc; }
                
                td { 
                  /* Behave  like a "row" */
                  border: none;
                  border-bottom: 1px solid #eee; 
                  position: relative;
                  padding-left: 50%; 
                }

                td:before { 
                  /* Now like a table header */
                  position: absolute;
                  /* Top/left values mimic padding */
                  top: 6px;
                  left: 6px;
                  width: 45%; 
                  padding-right: 10px; 
                  white-space: nowrap;
                  /* Label the data */
                  content: attr(data-column);

                  color: #000;
                  font-weight: bold;
                }

              }
              h1{
                text-align: center;
                margin:80px;
                font-size:50px;
                color:#00000;
              }
  </style>
</head>
  <body>
    <h1>Students who have been registerd to UCSM</h1>
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>MKPT</th>
            <th>NRC</th>
            <th>Year</th>
            <th>Phone Number</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
              @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->mkpt }}</td>
                <td>{{ $user->nrc }}</td>
                <td>{{ $user->year }}</td>
                <td>{{ $user->ph_no }}</td>
                <td>{{ $user->address }}</td>
                </tr>
                @endforeach
          
        </tbody>
      </table>
</body>
</html>
