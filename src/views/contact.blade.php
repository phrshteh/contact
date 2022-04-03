<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        Send Message

    <form method="post" action="{{route('contact')}}">
        @csrf
        <input type="text" name="name" style="display: block; margin-top: 10px" placeholder="your name">
        <input type="email" name="email" style="display: block; margin-top: 10px" placeholder="your email">
        <textarea name="message" cols="30" rows="20" style="display: block; margin-top: 10px" placeholder="message"></textarea>
        <input type="submit" value="submit" style="margin-top: 10px">
    </form>
    </body>
</html>