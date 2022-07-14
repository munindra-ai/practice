@extends('layouts.app')

@section('content')
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


<div class="container">
<div class="abt-title">
<a href="#">About Us</a>
</div>
        <section class="mb-4">
            <div class="flex items-center mb-2 sm:mb-2">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="product-card grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1   gap-8">
                
                <section>
                <div class="container ">
                    <div class="row justify-content-center">
                    <div class="col-md-1 col-lg-1 col-xl-1">
                        
                       <div class="left">
                       
                        <p class="para animate__animated animate__fadeInLeft">Every individual born on earth unmistakably bears unconditional high regards for
                             his/her own mother tongue, literature, religion, art ,and culture.
                                We are American of Bhutanese origin.
                                We are a society of rich and developed native language, literature,
                                religion and culture. We belong to the ancient Vedic Hindu Dharma. Under the auspicious of American laws, 
                                we have been enjoying the freedom to practice our religious practices such as prayers, 
                                pujas, rituals involving birth or death and the likes. We understand that right to religion 
                                comes under fundamental rights. Individuals who do not inherit cultural and religious values
                                from their ancestors find it difficult to define their very own existences.</p>

                       </div>
                       <div class="right">
                       
                        <img src="/images/GBHO-logo.png">
                        
                       </div>
                    </div>
                    </div>
                </div>
                </section>
                <section>
                    
                <div class="container ">
                    <div class="row justify-content-center">
                    <div class="col-md-1 col-lg-1 col-xl-1">
                        
                      <div class="para animate__animated animate__fadeInLeft">
                        <p class="para"> The backdrop of our history is intricately linked to the language we speak, religion we follow, and cultural values that we derive pride from.
                        Our existence is assured only if we work adequately on preserving our religion, values and culture. Appreciating the need to act to preserve and protect our cultural and religious heritages, the Bhutanese Vedic Hindu practitioners have embarked on a journey for the same. We have focused on embedding the Vedic Hindu values in our lifestyle which we believe will consequently help preserve and protect our norms and values through this organization.Global Bhutanese Hindu Organization is a pure non-profit religious/spiritual and cultural organization established in 2013.</p>
                      </div>
                       
                    </div>
                    
                    </div>
                    
                </div>
                
                </section>

            </div>
        </section>
    </div>

@endsection