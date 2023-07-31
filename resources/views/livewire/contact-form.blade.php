<div class="p-6 rounded-lg bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
    <div class="grid grid-rows-4 gap-6 mt-6 text-gray-900 dark:text-white">
        <h2 class="row-start-1 row-end-2 text-xl font-semibold">Business Inquiry?  E-Mail Me! </h2>

        <form wire:submit="save">
            <div>
                <label class="row-start-2 row-end-3" for="email">Email:</label>
                <input type="text" id="email" class="row-start-2 row-end-3 border dark:text-black placeholder-grey-300" placeholder="Enter your e-Mail." wire:model="visitorEmail">
                @error('visitorEmail') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div>
                <label class="row-start-3 row-end-4" for="message">Message:</label>
                <textarea type="text" id="message" class="row-start-3 row-end-4 border dark:text-black placeholder-grey-300" placeholder="Enter your message." wire:model="visitorMessage"></textarea>
                @error('visitorMessage') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <button type="submit" class="justify-center row-start-4 row-end-5 border dark:border dark:border-white">Submit Inquiry</button>
        </form>
    </div>
</div>
