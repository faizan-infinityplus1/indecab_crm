const hearingTest = [
    {
        part: 1,
        heading: "a questionnaire",
        title: "First, we will ask you 15 short questions about your hearing in everyday situations. Please read the question below and answer truthfully.",
        mediaType: `<figure>
                    <img src="assets/image/logo/logo.png" alt="">
                </figure>`,
        questionNo: 1,
        question:
            "Do you ever find yourself asking people to repeat what they said during one-on-one conversations?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "no",
                value: "no",
            },
            {
                id: 2,
                type: "radio",
                label: "sometimes",
                value: "sometimes",
            },
            {
                id: 3,
                type: "radio",
                label: "yes",
                value: "yes",
            },
        ],
    },
    {
        part: 1,
        heading: "a questionnaire",
        title: "First, we will ask you 15 short questions about your hearing in everyday situations. Please read the question below and answer truthfully.",
        mediaType: `<figure>
                    <img src="assets/image/logo/logo.png" alt="">
                </figure>`,
        questionNo: 2,
        question:
            "Do you have difficulty understanding a conversation if the speaker is not looking straight at you?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "no",
                value: "no",
            },
            {
                id: 2,
                type: "radio",
                label: "sometimes",
                value: "sometimes",
            },
            {
                id: 3,
                type: "radio",
                label: "yes",
                value: "yes",
            },
        ],
    },
    {
        part: 1,
        heading: "a questionnaire",
        title: "First, we will ask you 15 short questions about your hearing in everyday situations. Please read the question below and answer truthfully.",
        mediaType: `<figure>
                    <img src="assets/image/logo/logo.png" alt="">
                </figure>`,
        questionNo: 3,
        question: "Do you have difficulty understanding group conversations?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "no",
                value: "no",
            },
            {
                id: 2,
                type: "radio",
                label: "sometimes",
                value: "sometimes",
            },
            {
                id: 3,
                type: "radio",
                label: "yes",
                value: "yes",
            },
        ],
    },
    {
        part: 1,
        heading: "a questionnaire",
        title: "First, we will ask you 15 short questions about your hearing in everyday situations. Please read the question below and answer truthfully.",
        mediaType: `<figure>
                    <img src="assets/image/logo/logo.png" alt="">
                </figure>`,
        questionNo: 4,
        question:
            "Do you have difficulty understanding people in noisy situations?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "no",
                value: "no",
            },
            {
                id: 2,
                type: "radio",
                label: "sometimes",
                value: "sometimes",
            },
            {
                id: 3,
                type: "radio",
                label: "yes",
                value: "yes",
            },
        ],
    },
    {
        part: 1,
        heading: "a questionnaire",
        title: "First, we will ask you 15 short questions about your hearing in everyday situations. Please read the question below and answer truthfully.",
        mediaType: `<figure>
                        <img src="assets/image/logo/logo.png" alt="">
                    </figure>`,
        questionNo: 5,
        question:
            "Do you often find that people mumble or talk too quietly, for example during conversations, on TV or when visiting your doctor?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "no",
                value: "no",
            },
            {
                id: 2,
                type: "radio",
                label: "sometimes",
                value: "sometimes",
            },
            {
                id: 3,
                type: "radio",
                label: "yes",
                value: "yes",
            },
        ],
    },
    {
        part: 1,
        heading: "a questionnaire",
        title: "First, we will ask you 15 short questions about your hearing in everyday situations. Please read the question below and answer truthfully.",
        mediaType: `<figure>
                        <img src="assets/image/logo/logo.png" alt="">
                    </figure>`,
        questionNo: 6,
        question: "Do you often find that people talk too quickly?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "no",
                value: "no",
            },
            {
                id: 2,
                type: "radio",
                label: "sometimes",
                value: "sometimes",
            },
            {
                id: 3,
                type: "radio",
                label: "yes",
                value: "yes",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment. Play the audioprompt on the right to start your audio introduction.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_HearingTest_Intro.mp4" type="video/mp4">
      <source src="assets/image/ENG_HearingTest_Intro.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        questionNo: 7,
        question: "",
        options: [
            {
                id: 1,
                type: "text",
                label: "Full name",
                value: "Full name",
            },
            {
                id: 2,
                type: "text",
                label: "Email",
                value: "Email",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment. Play the audioprompt on the right to start your audio introduction.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_02_pose_.mp4" type="video/mp4">
      <source src="assets/image/ENG_02_pose_.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        questionNo: 8,
        question: "What do you hear?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "Doze",
                value: "Doze",
            },
            {
                id: 2,
                type: "radio",
                label: "Pose",
                value: "Pose",
            },
            {
                id: 3,
                type: "radio",
                label: "Pews",
                value: "Pews",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment. Play the audioprompt on the right to start your audio introduction.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_03_Seem.mp4" type="video/mp4">
      <source src="assets/image/ENG_03_Seem.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        questionNo: 9,
        question: "What do you hear?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "Seem",
                value: "Seem",
            },
            {
                id: 2,
                type: "radio",
                label: "Seal",
                value: "Seal",
            },
            {
                id: 3,
                type: "radio",
                label: "Seen",
                value: "Seen",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment.\
                        Play the audioprompt on the right to start your first audio fragment. Please try to identify the word spoken by the narrator.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_04_BEEF.mp4" type="video/mp4">
      <source src="assets/image/ENG_04_BEEF.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        questionNo: 10,
        question: "What do you hear?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "Beef",
                value: "Beef",
            },
            {
                id: 2,
                type: "radio",
                label: "Bees",
                value: "Bees",
            },
            {
                id: 3,
                type: "radio",
                label: "Fees",
                value: "Fees",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment.\
                        Play the audioprompt on the right to start your first audio fragment. Please try to identify the word spoken by the narrator.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_05_tongue.mp4" type="video/mp4">
      <source src="assets/image/ENG_05_tongue.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        questionNo: 11,
        question: "What do you hear?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "Dung",
                value: "Dung",
            },
            {
                id: 2,
                type: "radio",
                label: "Tongue",
                value: "Tongue",
            },
            {
                id: 3,
                type: "radio",
                label: "Tall",
                value: "Tall",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment.\
                        Play the audioprompt on the right to start your first audio fragment. Please try to identify the word spoken by the narrator.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_06_Cap.mp4" type="video/mp4">
      <source src="assets/image/ENG_06_Cap.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        question: "What do you hear?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "Cap",
                value: "Cap",
            },
            {
                id: 2,
                type: "radio",
                label: "Cat",
                value: "Cat",
            },
            {
                id: 3,
                type: "radio",
                label: "Tap",
                value: "Tap",
            },
        ],
    },
    {
        part: 2,
        heading: "The SOUND test",
        title: "Here we test how well you understand audioprompts in a noisy environment.\
                        Play the audioprompt on the right to start your first audio fragment. Please try to identify the word spoken by the narrator.",
        mediaType: `<video width="320" height="240" controls>
      <source src="assets/image/ENG_07_fang.mp4" type="video/mp4">
      <source src="assets/image/ENG_07_fang.mp4" type="video/ogg">
    Your browser does not support the video tag.
    </video>`,
        question: "What do you hear?",
        options: [
            {
                id: 1,
                type: "radio",
                label: "Hang",
                value: "Hang",
            },
            {
                id: 2,
                type: "radio",
                label: "Sang",
                value: "Sang",
            },
            {
                id: 3,
                type: "radio",
                label: "Fang",
                value: "Fang",
            },
        ],
    }
];
