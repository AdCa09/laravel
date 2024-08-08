<x-auth-layout name="inscriptions" :action="route('register')" submitMessage='inscription'>
    
    <x-input name="name" label="Nom complet" />
    <x-input name="email" label="Adresse e-mail" type="email"/>
    <x-input name="password" label="Mot de passe" type="password" />
    <x-input name="pasword_confirmation" label="Confirmer le mot de passe" type="password"/>

</x-auth-layout>