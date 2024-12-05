<x-guest-layout>
  <div class="flex flex-col min-h-screen">
    <header class="px-4 lg:px-6 h-14 flex items-center">
      <a class="flex items-center justify-center" href="#">
        <Play class="h-6 w-6 text-primary" />
        <span class="ml-2 text-2xl font-bold">EliteForge</span>
      </a>
      <nav class="ml-auto flex gap-4 sm:gap-6">
        <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
          Features
        </a>
        <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
          Pricing
        </a>
        <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
          About
        </a>
        <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
          Contact
        </a>
      </nav>
    </header>
    <main class="flex-1">
      <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48">
        <div class="container px-4 md:px-6">
          <div class="flex flex-col items-center space-y-4 text-center">
            <div class="space-y-2">
              <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                Level Up Your Gameplay with Expert Coaching
              </h1>
              <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                Upload your gameplay videos, connect with top-tier coaches, and receive personalized
                feedback to improve your skills.
              </p>
            </div>
            <div class="space-x-4">
              <button class="btn">Get Started</button>
              <button class="btn" variant="outline">Learn More</button>
            </div>
          </div>
        </div>
      </section>
      <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6">
          <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">Key
            Features</h2>
          <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-3">
            <div class="flex flex-col items-center space-y-3 text-center">
              <Upload class="h-12 w-12 text-primary" />
              <h3 class="text-xl font-bold">Easy Video Upload</h3>
              <p class="text-gray-500 dark:text-gray-400">Quickly upload your gameplay videos in various
                formats.</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <Search class="h-12 w-12 text-primary" />
              <h3 class="text-xl font-bold">Find Expert Coaches</h3>
              <p class="text-gray-500 dark:text-gray-400">Search and connect with coaches specializing in
                your
                game.</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <MessageSquare class="h-12 w-12 text-primary" />
              <h3 class="text-xl font-bold">Detailed Feedback</h3>
              <p class="text-gray-500 dark:text-gray-400">Receive comprehensive text feedback from your
                coach.</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <PenTool class="h-12 w-12 text-primary" />
              <h3 class="text-xl font-bold">Video Annotations</h3>
              <p class="text-gray-500 dark:text-gray-400">Coaches can draw directly on your video to
                highlight
                areas for improvement.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container px-4 md:px-6">
          <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">How It
            Works</h2>
          <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-3">
            <div class="flex flex-col items-center space-y-3 text-center">
              <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-white">1
              </div>
              <h3 class="text-xl font-bold">Upload Your Gameplay</h3>
              <p class="text-gray-500 dark:text-gray-400">Record and upload your gaming sessions to our
                platform.</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-white">2
              </div>
              <h3 class="text-xl font-bold">Choose a Coach</h3>
              <p class="text-gray-500 dark:text-gray-400">Browse our network of expert coaches and select
                the
                best fit for you.</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-white">3
              </div>
              <h3 class="text-xl font-bold">Receive Feedback</h3>
              <p class="text-gray-500 dark:text-gray-400">Get personalized tips and annotations to improve
                your gameplay.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6">
          <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">Video
            Annotations in Action</h2>
          <div class="grid gap-10 sm:grid-cols-2">
            <div class="flex flex-col items-center space-y-3">
              <Image src="/placeholder.svg?height=300&width=500" alt="Video annotation example" width={500} height={300}
                class="rounded-lg shadow-lg" />
              <p class="text-center text-gray-500 dark:text-gray-400">
                Coaches can draw arrows, circles, and add text directly on your gameplay video.
              </p>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <Image src="/placeholder.svg?height=300&width=500" alt="Coaching interface example" width={500}
                height={300} class="rounded-lg shadow-lg" />
              <p class="text-center text-gray-500 dark:text-gray-400">
                Our intuitive interface allows coaches to provide frame-by-frame analysis.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container px-4 md:px-6">
          <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
            Comprehensive
            Coaching Experience</h2>
          <div class="grid gap-10 sm:grid-cols-2">
            <div class="flex flex-col items-center space-y-3">
              <Image src="/placeholder.svg?height=300&width=500" alt="Text feedback example" width={500} height={300}
                class="rounded-lg shadow-lg" />
              <p class="text-center text-gray-500 dark:text-gray-400">
                Receive detailed text feedback alongside your annotated video.
              </p>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <Image src="/placeholder.svg?height=300&width=500" alt="Coach-player interaction example" width={500}
                height={300} class="rounded-lg shadow-lg" />
              <p class="text-center text-gray-500 dark:text-gray-400">
                Engage in real-time discussions with your coach to clarify feedback and strategies.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6">
          <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">What Our
            Users
            Say</h2>
          <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-3">
            <div class="flex flex-col items-center space-y-3 text-center">
              <Image src="/placeholder.svg?height=100&width=100" alt="User Avatar" class="rounded-full" width={100}
                height={100} />
              <blockquote class="text-lg font-semibold">"GameplayCoach helped me reach Diamond rank in
                just
                two months!"
              </blockquote>
              <p class="text-sm text-gray-500 dark:text-gray-400">- Alex, Overwatch Player</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <Image src="/placeholder.svg?height=100&width=100" alt="User Avatar" class="rounded-full" width={100}
                height={100} />
              <blockquote class="text-lg font-semibold">"The video annotations feature is a game-changer.
                It's
                like having a pro player right beside you."
              </blockquote>
              <p class="text-sm text-gray-500 dark:text-gray-400">- Sarah, Fortnite Player</p>
            </div>
            <div class="flex flex-col items-center space-y-3 text-center">
              <Image src="/placeholder.svg?height=100&width=100" alt="User Avatar" class="rounded-full" width={100}
                height={100} />
              <blockquote class="text-lg font-semibold">"As a coach, this platform allows me to provide
                detailed feedback efficiently. It's a win-win for everyone."
              </blockquote>
              <p class="text-sm text-gray-500 dark:text-gray-400">- Mike, Professional Coach</p>
            </div>
          </div>
        </div>
      </section>
      <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container px-4 md:px-6">
          <div class="flex flex-col items-center space-y-4 text-center">
            <div class="space-y-2">
              <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Ready to Level
                Up?</h2>
              <p
                class="mx-auto max-w-[600px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
                Join GameplayCoach today and start your journey to becoming a better player.
              </p>
            </div>
            <div class="w-full max-w-sm space-y-2">
              <form class="flex space-x-2">
                <Input class="max-w-lg flex-1" placeholder="Enter your email" type="email" />
                <button class="btn btn-warning" type="submit">
                  Get Started
                  <ChevronRight class="ml-2 h-4 w-4" />
                </button>
              </form>
              <p class="text-xs text-gray-500 dark:text-gray-400">
                By signing up, you agree to our{" "}
                <a class="underline underline-offset-2" href="#">
                  Terms & Conditions
                </a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
      <p class="text-xs text-gray-500 dark:text-gray-400">© 2024 GameplayCoach. All rights reserved.</p>
      <nav class="sm:ml-auto flex gap-4 sm:gap-6">
        <a class="text-xs hover:underline underline-offset-4" href="#">
          Terms of Service
        </a>
        <a class="text-xs hover:underline underline-offset-4" href="#">
          Privacy
        </a>
      </nav>
    </footer>
  </div>
</x-guest-layout>
