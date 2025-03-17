@component('mail::message')
# Nouveau message de contact

**Nom:** {{ $contact->name }}  
**Email:** {{ $contact->email }}  
@if($contact->company_name)
**Entreprise:** {{ $contact->company_name }}  
@endif
@if($contact->phone)
**Téléphone:** {{ $contact->phone }}  
@endif

**Message:**  
{{ $contact->message }}

Merci,  
{{ config('app.name') }}
@endcomponent 