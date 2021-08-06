# panjul-alert

laravel tailwindcss alert

# require

laravel v8.x

npm

tailwindcss

# installation

composer require arifwardan/panjuler

in blade file:
  @include('panjulert::alert')

in controlle use :
  return redirect('/dashboard')->with('error', 'Profile updated!');
  
type :
  success
  info
  warning
  error
