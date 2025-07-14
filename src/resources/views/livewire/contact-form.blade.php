<div class="contact-us section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  align-self-center">
                <div class="section-heading">
                    <h6>Contact Us</h6>
                    <h2>Feel free to contact us anytime</h2>
                    <p>We provide best CSS templates at 100% free of charge.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <form wire:submit.prevent="submit">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <input type="text" wire:model="name" placeholder="Your Name..." class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="email" wire:model="email" placeholder="Your Email..."
                                    class="form-control">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea wire:model="message" placeholder="Your Message" class="form-control"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="orange-button">Send Message Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
