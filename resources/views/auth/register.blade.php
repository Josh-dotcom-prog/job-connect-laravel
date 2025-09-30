<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="post" action="/register">
        <x-forms.input label="Your Name" name="name" type="text" />
        <x-forms.input label="Your Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>

</x-layout>