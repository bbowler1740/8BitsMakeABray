<div class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
    <div class="flex gap-6 mt-6 text-xl font-semibold text-gray-900 dark:text-white">
        <h2 class="dark:text-white">Still not </h2>
        <form wire:submit="save">
            <label for="email">Email:</label>
            <input type="text" id="email" class="dark:text-black" wire:model="$visitorEmail">
            <label for="message">Message:</label>
            <input type="text" id="message" class="dark:text-black" wire:model="$visitorMessage">
            <button type="submit" class="dark:border dark:border-white">Submit</button>
        </form>
    </div>
</div>
