
            
                <div class="top-right links">
                   @if (Auth::check()) 
                            
                        @if(($a = Auth::user()->role_id)===1)
                            <a href="#"> {{ Auth::user()->username }}</a>
                        @else
                            <a href="/{{ Auth::user()->username }}/RegisterCorpse">{{ Auth::user()->username }}</a>
                        @endif
                       
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/corpse') }}" >Search Corpse</a>
                            @if($a===1)
                                <a href="{{ url('/search') }}" >Search Account</a>
                                <a href="{{ url('/statistics') }}" >Reports</a>
                                <a href="{{ url('/relationship') }}" >Add Relationship</a>
                                <a href="{{ url('/request') }}" >Approve Request</a>
                            @endif
                        <a href="/settings">Settings</a>
                        <a href="/logout">Logout</a>
                        
                    @else
                        <a href="{{ url('/corpse') }}" >Search Corpse</a>
                        <a href="{{ url('/login') }}" >Login</a>
                        <a href="{{ url('/register') }}" >Register</a>
                    @endif
                </div>
            

            
    