<x-app-layout>
    <div class="container mx-auto mt-32">
        <div class="name">
            Name: 
            <p>{{ $contactMessage->name }}</p>
        </div>
        <div class="email">
            Email: 
            <p>{{ $contactMessage->email }}</p>
        </div>
        <div class="message">
            Message: 
            <p>{{ $contactMessage->message }}</p>
        </div>
        
    </div>



</x-app-layout>
