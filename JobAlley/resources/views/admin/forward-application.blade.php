<!DOCTYPE html>
<html>
<head>
    <title>New Job Application</title>
</head>
<body>
    <h1>New Application for Job: {{ $application->job->position }}</h1>
    <p>Name: {{ $application->user->name }}</p>
    <p>Email: {{ $application->user->email }}</p>
    <p>Contact: {{ $application->contact }}</p>
    <p>Resume: <a href="{{ asset('storage/resumes' . $application->resume) }}" target="_blank">View Resume</a></p>
    <p>Cover Letter: <a href="#" target="_blank">View Cover Letter</a></p>
</body>
</html>