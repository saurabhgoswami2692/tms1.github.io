<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>

  <div class="row">

    <div class="col-lg-3"></div>
    <div class="col-lg-6 m-3 p-3">
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      <form action="{{ route('ticket_add') }}" method="POST" m>
        @csrf
        <div class="form-group m-2">
          <label for="query_type">Query Type</label>
          <select class="form-control" name="query_type" id="query_type">
            <option value="support">Support</option>
            <option value="complaint">Complaint</option>
            <option value="feedback">Feedback</option>
            <option value="suggestion">Suggestion</option>
            <option value="gen_query">General Query</option>
          </select>
        </div>


        <div class="form-group m-2">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
        </div>

        <div class="form-group m-2">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>

        <div class="form-group m-2">
          <label for="mobile">Mobile</label>
          <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" required>
        </div>

        <div class="form-group m-2">
          <label for="priority">Priority</label>
          <select class="form-control" name="priority" id="priority">
            <option value="major">Major</option>
            <option value="urgent">Urgent</option>
          </select>
        </div>

        <div class="form-group m-2">
          <label for="subject">Subject</label>
          <input type="subject" class="form-control" id="subject" name="subject" placeholder="Subject">
        </div>

        <div class="form-group m-2">
          <label for="message">Message</label>
          <textarea class="form-control" name='message' id="message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-lg-6"></div>
  </div>

</body>

</html>