<div class="border border-blue-400 rounded px-8 py-6 mb-8">
                <form method="POST" action=" /tweets ">
                @csrf 
                    <textarea 
                    name="body" 
                    class="w-full"
                    placeholder="What's up doc?"
                    required
                    ></textarea>
                    <hr class="my-4">

                    <footer class="flex justify-between">
                        <img 
                        src="{{ auth()->user()->avatar }}" 
                        alt="Avatar"
                        class="rounded-full mr-2"
                        width="50"
                        >

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-10 text-sm text-white h-10 ">Tweet-a-roo!</button>

                    </footer>
                </form>

                @error('body')
                  <p class="text-red-800 mt-3 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
            
            </div>