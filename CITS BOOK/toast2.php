<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-3">
        <h3>Tooltip Positioning</h3>
        <p>The data-placement altribute specifies the tooltipposition.</p>
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Radha!">Top</a>
         <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Radha!">Bottom</a>
          <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Radha!">Left</a>
           <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Radha!">Right</a>
</div>
<script>
    var tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList=tooltipTriggerList.map(function(tooltipTriggerEl){
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>
    
</body>
</html>