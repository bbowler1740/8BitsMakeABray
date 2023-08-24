<div class="p-6 rounded-lg bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
    <div class="text-gray-900 dark:text-white">
        <h2 class="text-xl font-semibold">Business Inquiry? E-Mail Me! </h2>

        <form class="space-y-4 text-gray-500 dark:text-gray-400 text-sm" wire:submit="save">
            <div class="mt-4">
                <label for="name">Name:</label>
                <input type="text" wire:model.live="visitorName" id="name" class="w-full border rounded text-black dark:text-black placeholder-grey-300" placeholder="Enter your preferred name.">
                @error('visitorName') <span class="error text-red-500">{{$message}}</span>@enderror
            </div>
            <p class="text-white">{{$visitorName}}</p>
            <div class="mt-4">
                <label for="email">Email:</label>
                <input type="text" wire:model.live="visitorEmail" id="email" class="w-full border rounded text-black dark:text-black placeholder-grey-300" placeholder="Enter your E-Mail address.">
                @error('visitorEmail') <span class="error text-red-500">{{$message}}</span>@enderror
            </div>

            <div>
                <label for="message">Message:</label>
                <textarea type="text" wire:model.live="visitorMessage" id="message" rows="10" class="w-full border rounded text-black dark:text-black placeholder-grey-300" placeholder="Enter your message."></textarea>
                @error('visitorMessage') <span class="error text-red-500">{{$message}}</span>@enderror
            </div>

            <button type="submit" class="p-2 rounded border border-gray-500 dark:border-gray-400 motion-safe:hover:scale-[1.05]">Submit Inquiry</button>
        </form>
    </div>
</div>
