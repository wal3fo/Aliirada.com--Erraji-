<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="main-login card">
                <div class="card-header">
                    <h3 class="card-title text-center">
                        <span class="text-uppercase cursor-pointer">ADMIN</span>
                        <span class="text-uppercase cursor-pointer">CPANEL</span>
                    </h3>
                </div>

                <div class="card-body">
                    <form wire:submit="loginHandler" class="row gy-5">
                        @if(session()->has('NexaError') || session()->has('NexaSuccess'))
                            <div class="col-12">
                                @if(session()->has('NexaError'))
                                    <div class="alert alert-danger m-0">
                                        {{ session()->get('NexaError') }}
                                    </div>
                                @elseif(session()->has('NexaSuccess'))
                                    <div class="alert alert-success m-0">
                                        {{ session()->get('NexaSuccess') }}
                                    </div>
                                @endif
                            </div>
                        @endif
                        <div class="col-12">
                            <label class="form-label">Email Address</label>
                            <input type="text" required placeholder="Enter your email" wire:model="userEmail">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="password" required placeholder="Enter your password" wire:model="userPassword">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>