<template>
    <nav class="navbar navbar-expand-lg navbar-black bg-black">
        <div class="container">
            <!-- Centered brand/logo -->
            <RouterLink class="navbar-brand mx-auto text-white" to="/">Home</RouterLink>

            <!-- Toggler button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <RouterLink class="nav-link active text-white" to="/">Home</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink class="nav-link active text-white" to="/users">Users</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink class="nav-link active text-white" to="/signup">Register</RouterLink>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>