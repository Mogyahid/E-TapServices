@section('title', 'My Profile')

<div class="relative">
    <!-- Navbar section here -->
    <livewire:customer-side.components.user-navbar />

    <!-- Main -->
    <div class="mx-15 flex mb-80 h-screen">
        <div class="rounded-md w-80 h-full text-center">
            <div class="flex flex-col items-center relative">
                <img src="https://picsum.photos/230/230" class="rounded shadow" alt="">
                <button class="bg-blue-500 mt-2 px-10 py-2 hover:shadow rounded-md text-white">Upload New Profile</button>
            </div>

            <div>
                <h1 class="font-bold text-xl mt-7">Jane Doe</h1>
                <p>Female</p>
            </div>
        </div>
        <div class="flex-1 mx-15">
            <div class="flex justify-between">
                <div>
                    <h1 class="font-black text-2xl">Personal Information</h1>
                    <p class="text-gray-600">Hi <b>Jane Doe</b>, below is your personal information. You can edit them.</p>
                </div>
                <div>
                    <a href="#" class="border-blue-500 border rounded-md py-2 text-blue-500 hover:shadow px-3">Edit Information</a>
                </div>
            </div>

            <div class="flex space-x-7">
                <div class="mt-5 space-y-3">
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">First Name</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Middle Name</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Last Name</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Date of Birth</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>

                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Email</p>
                        <input type="email" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                </div>

                <div class="mt-5 space-y-3">
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Phone Number</p>
                        <input type="email" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Province</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">City</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Barangay</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Other</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md">
                    </div>
                </div>
            </div>

            <button class="mt-5 px-3 py-2 border-blue-500 border rounded-md text-white bg-blue-500">Save Profile</button>

            <div class="mt-5">
                <div>
                    <h1 class="font-black text-2xl">Change Password</h1>
                </div>

                <div class="mt-5 space-y-3">
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Current Password</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md" placeholder="Enter current password">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">New Password</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md" placeholder="Enter new password">
                    </div>
                    <div>
                        <p class="font-medium mb-1 text-left text-footer">Confirm New Password</p>
                        <input type="text" class="border w-96 px-3 py-2 rounded-md" placeholder="Confirm new password">
                    </div>

                    <button class="px-3 py-2 border-blue-500 border rounded-md text-white bg-blue-500">Save New Password</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <livewire:customer-side.components.footer />
</div>