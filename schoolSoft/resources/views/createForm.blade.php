@extends('layouts.app')

@section('content')
{{-- <h1>formulaire </h1>
<form action="{{ route('sauveEleve') }}" method="post">
    @csrf
    <input  type="text" class="bg-blue-200 " name="matricule">
    <input  type="text" class="bg-blue-200 " name="civilite">
    <input  type="text" class="bg-blue-200 " name="nom">
    <input  type="text" class="bg-blue-200 " name="prenom">

    <input class=" bg-blue-700" type="submit" value="enregistrer">
    
    
  </form> --}}
<div>
  <div class="md:grid md:grid-cols-2 md:gap-6">
    
    
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('sauveEleve') }}" method="POST">
        @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-gray-200 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                  <input type="text" name="nom" id="nom" autocomplete="given-name" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="prenom" class="block text-sm font-medium text-gray-700">Prenom</label>
                  <input type="text" name="prenom" id="prenom" autocomplete="family-name" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                
                <div class="col-span-6 sm:col-span-3">
                  <label for="date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                  <input type="date" name="date_naissance" id="date_naissance" autocomplete="family-name" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                
                <div class="col-span-6 sm:col-span-3">
                  {{-- <legend class="text-base font-medium text-gray-900">Push Notifications</legend> --}}
                  <label for="lieu_naissance" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                  <input type="text" name="lieu_naissance" id="lieu_naissance" autocomplete="family-name" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                
                
                <div class="col-span-6 sm:col-span-1">
                  <div>
                    <label for="sexe" class="block text-sm font-medium text-gray-700">Sexe</label>
                    {{-- <legend class="text-base font-medium text-gray-900">Push Notifications</legend> --}}
                    {{-- <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                  </div>
                  <div class="mt-0 space-y-1">
                    <div class="flex items-center">
                      <input id="masculin" name="civilite" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                      <label for="masculin" class="ml-3 block text-sm font-medium text-gray-700">
                        Masculin
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="feminin" name="civilite" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                      <label for="feminin" class="ml-3 block text-sm font-medium text-gray-700">
                        Feminin
                      </label>
                    </div>
                  
                  </div>
                </div>



  
                <div class="col-span-6 sm:col-span-2">
                  <label for="nationnalite" class="block text-sm font-medium text-gray-700">Nationnalite</label>
                  <select id="nationnalite" name="nationnalite" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                  {{-- <input type="text" name="nationnalite" id="nationnalite" autocomplete="email" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> --}}
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                  <input type="text" name="telephone" id="telephone" autocomplete="street-address" class="mt-1 p-2 right-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-1">
                  <label for="arrondissement" class="block text-sm font-medium text-gray-700">Arrondissement</label>
                  <select id="country" name="arrondissement" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
                
                <div class="col-span-6 sm:col-span-5">
                  <label for="quartier" class="block text-sm font-medium text-gray-700">Quartier</label>
                  <select id="quartier" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
  
               
  
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="nom_tuteur" class="block text-sm font-medium text-gray-700">Nom et prenom du tuteur</label>
                  <input type="text" name="nom_tuteur" id="city" autocomplete="address-level2" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="fonction" class="block text-sm font-medium text-gray-700">Fonction du tuteur</label>
                  <input type="text" name="fonction" id="fonction" autocomplete="address-level1" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="contact_tuteur" class="block text-sm font-medium text-gray-700">Contact du tuteur</label>
                  <input type="text" name="contact_tuteur" id="postal-code" autocomplete="postal-code" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection   