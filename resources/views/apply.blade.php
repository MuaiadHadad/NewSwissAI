@extends('layouts.app')

@section('title', 'Apply')

@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Careers</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                    <li class="current">Apply</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    <section id="career-form" class="contact section">
        <div class="container">
            <div class="form-wrapper p-4 p-lg-5 shadow-lg rounded bg-white" data-aos="fade-up">
                <h2 class="text-center mb-4">Apply to Join SwissAI</h2>
                <div class="toast-container position-fixed end-0 p-3" style="z-index: 1060; top:17%">
                    @if(session('success'))
                        <div id="alert-success" class="toast show align-items-center text-bg-success border-0 mb-2 animate__animated animate__fadeInDown" role="alert">
                            <div class="d-flex">
                                <div class="toast-body">
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('cert_upload') && str_contains($errors->first('cert_upload'), 'must not be greater'))
                        <div id="alert-cert-size" class="toast show align-items-center text-bg-warning border-0 mb-2 animate__animated animate__fadeInDown" role="alert">
                            <div class="d-flex">
                                <div class="toast-body">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    The uploaded file is too large. Please upload a file under 5MB.
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(session('error'))
                        <div id="alert-error" class="toast show align-items-center text-bg-danger border-0 mb-2 animate__animated animate__fadeInDown" role="alert">
                            <div class="d-flex">
                                <div class="toast-body">
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <form id="multiStepForm" class="php-email-form" method="POST" action="{{ route('careers.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div id="formError" class="alert alert-danger d-none mb-4" role="alert"  autocomplete="on">
                        Please fill in all required fields before continuing.
                    </div>
                    <!-- Step 1: Personal Information -->
                    <div class="form-step">
                        <h4 class="mb-3"><i class="bi bi-person-vcard"></i> Personal Information</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="first_name" class="form-control" placeholder="* Full Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="* Email" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="linkedin" class="form-control" placeholder="* LinkedIn" required>
                                <div class="invalid-feedback">
                                    Please enter a valid url address.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="github" class="form-control" placeholder="* GitHub" required>
                                <div class="invalid-feedback">
                                    Please enter a valid url address.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="portfolio" class="form-control" placeholder="Portfolio (optional)">
                                <div class="invalid-feedback">
                                    Please enter a valid url address.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="website" class="form-control" placeholder="Personal Website (optional)">
                                <div class="invalid-feedback">
                                    Please enter a valid url address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <select name="country" class="form-select custom-select" required>
                                    <option value="" disabled selected >* Select your country</option>
                                    @include('partials.country-options')
                                </select>
                            </div>

                            <div class="col-md-3 mb-3">
                                <select name="timezone" class="form-select custom-select" required>
                                    <option value="" disabled selected >* Select your Time Zone</option>
                                    @include('partials.timezone-options')
                                </select>
                            </div>
                            <div class="col-md-6 mb-6">
                                <select name="english_level" class="form-select custom-select" required>
                                    <option value="" disabled selected >* Select your english level</option>
                                    <option value="B1">Intermediate-B1</option>
                                    <option value="B2">Upper Intermediate-B2</option>
                                    <option value="C1">Advanced-C1</option>
                                    <option value="C2">Native-C2</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-check-label"><input class="custom-check" type="checkbox" name="nda" required>* I’m willing to sign a Non-Disclosure Agreement (NDA)
                                    <span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="An NDA (Non-Disclosure Agreement) ensures that any sensitive or confidential project details you share will be kept private.">
                                            <i class="bi bi-question-circle-fill text-muted" style="cursor: pointer;"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-next">
                                Continue <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                    </div>

                    <!-- Step 2: Areas of Expertise -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-tools"></i> Areas of Expertise</h4>
                        <div class="invalid-feedback" id="expertise-feedback" style="display: none;">
                            Please select at least one area of ​​expertise.
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-check-label"><input class="custom-check" type="checkbox" name="expertise[]" value="NLP/Chatbots"> Natural Language Processing (NLP) & Chatbots</label><br>
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="Vision/Robotics"> Computer Vision & Robotics</label><br>
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="Predictive/ML"> Predictive Models & Machine Learning (ML)</label><br>
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="RAG/Generative-Models"> Generative Models & Retrieval-Augmented Generation (RAG)
                                </label>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="MLOps/Deployment"> MLOps / Model Deployment</label><br>
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="Data/Pipelines"> Data Engineering / Pipelines</label><br>
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="Frontend"> Frontend (Streamlit / Gradio)</label><br>
                                <label class="form-check-label"><input class=" custom-check" type="checkbox" name="expertise[]" value="API"> AI-Powered Web Development & Integrations
                                </label>

                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>

                    <!-- Step 3: Certifications -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-file-earmark-text"></i>  Education and Certifications</h4>
                        <!-- Highest Degree -->
                        <div class="mb-3">
                            <label for="highest_degree" class="form-label">Highest Degree (STEM-related)</label>
                            <input type="text" id="highest_degree" name="highest_degree" class="form-control" placeholder="e.g., BSc in Computer Engineering, MSc in AI" required>
                        </div>
                        <!-- AI/ML Certifications -->
                        <div class="mb-3">
                            <label for="highest_degree" class="form-label">AI/ML Certifications</label>
                            <input type="text" id="highest_degree" name="ai_ml_certifications" class="form-control" placeholder="e.g., LangChain Certification, AWS Certified Machine Learning Specialty">
                        </div>
                        <!-- Other Certifications -->
                        <div class="mt-3 mb-3">
                            <label for="cert_other" class="form-label">Other relevant certifications (e.g., Cloud, Data Science)</label>
                            <input type="text" name="other_certifications" id="cert_other" class="form-control" placeholder="e.g., AWS Certified Cloud Practitioner">
                        </div>
                       <!-- <div class="d-flex align-items-center mb-3">
                            <label class="btn btn-outline-danger me-2 mb-0"><i class="bi bi-upload me-1"></i> Upload certificate Pdf (optional):
                                <input type="file" name="cert_upload" class="d-none" onchange="updateFileName(this)">
                            </label>
                            <span id="file-name" class="text-muted fst-italic">In Max 5M</span>
                        </div>-->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>

                    <!-- Step 4: Technical Skills -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-gear"></i> Technical Skills & Technologies</h4>
                        <div class="invalid-feedback" id="tech-feedback" style="display: none;">
                            Please select at least one area of Skills or Technologies.
                        </div>
                        <div class="row">
                            <!-- Programming Languages -->
                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold">Programming Languages</h6>
                                @foreach ([
                                  'Python (TensorFlow, PyTorch, Scikit-learn)',
                                  'JavaScript / TypeScript (React + AI)',
                                  'R (Statistical AI/ML)',
                                  'Julia (High-performance ML)',
                                  'Java (DL4J, enterprise AI)',
                                  'C++ (Robotics / embedded AI)',
                                  'Swift (iOS Core ML)',
                                  'Kotlin (Android ML)',
                                  'SQL (Vector DBs, analytics)',
                                ] as $lang)
                                    <div class="form-check">
                                        <input class="custom-check" type="checkbox" name="tech[]" value="{{ $lang }}" id="{{ md5($lang) }}">
                                        <label class="form-check-label" for="{{ md5($lang) }}">{{ $lang }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <!-- AI / ML & Data Science -->
                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold">AI / ML & Data Science</h6>
                                @foreach ([
                                  'Machine Learning (Supervised, Unsupervised)',
                                  'Deep Learning (CNNs, RNNs, Transformers)',
                                  'NLP (LLMs, GPT, BERT, LangChain)',
                                  'Computer Vision (OpenCV, YOLO)',
                                  'Generative AI (Diffusion, GANs)',
                                  'MLOps (MLflow, TFX, Kubeflow)',
                                  'Big Data (Kafka, Spark, Hadoop)',
                                  'AI Ethics & Explainability',
                                ] as $ai)
                                    <div class="form-check">
                                        <input class=" custom-check" type="checkbox" name="tech[]" value="{{ $ai }}" id="{{ md5($ai) }}">
                                        <label class="form-check-label" for="{{ md5($ai) }}">{{ $ai }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Frameworks & Libraries -->
                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold">Frameworks & Libraries</h6>
                                @foreach ([
                                  'TensorFlow', 'PyTorch', 'Keras', 'Scikit-learn',
                                  'Hugging Face', 'LangChain', 'LlamaIndex',
                                  'ONNX / TensorRT (Optimization)',
                                  'FastAPI / Flask (API deployment)',
                                  'Streamlit / Gradio (AI UI)',
                                ] as $lib)
                                    <div class="form-check">
                                        <input class="custom-check" type="checkbox" name="tech[]" value="{{ $lib }}" id="{{ md5($lib) }}">
                                        <label class="form-check-label" for="{{ md5($lib) }}">{{ $lib }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Databases -->
                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold">Databases</h6>
                                @foreach ([
                                  'SQL (PostgreSQL, MySQL)',
                                  'Vector DBs (Pinecone, Weaviate, FAISS, Milvus)',
                                  'NoSQL (MongoDB, Firebase)',
                                ] as $db)
                                    <div class="form-check">
                                        <input class=" custom-check" type="checkbox" name="tech[]" value="{{ $db }}" id="{{ md5($db) }}">
                                        <label class="form-check-label" for="{{ md5($db) }}">{{ $db }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>


                    <!-- Step 5: Practical Experience -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-folder"></i> Practical Experience</h4>
                        <div class="invalid-feedback" id="exp-feedback" style="display: none;">
                            Please select at least one experience or write something in “Other experience”.
                        </div>
                        @foreach([
                          'Chatbot with memory/context (Session-aware dialogues, RAG)' => 'memory',
                          'Model deployment (Production ML via APIs, containers, edge)' => 'deployment',
                          'Fine-tuning of LLMs (LoRA, QLoRA, custom datasets)' => 'finetune',
                          'Interactive AI app with dashboard (Gradio, Streamlit, React)' => 'dashboard',
                          'Custom AI agents (Autonomous workflows with APIs/tools)' => 'agents',
                          'Multimodal AI systems (Text + image/video/audio)' => 'multimodal',
                          'Optimized inference (Quantization, pruning, ONNX, TensorRT)' => 'optimization',
                        ] as $label => $value)
                            <div class="form-check mb-2">
                                <input class="custom-check" type="checkbox" name="exp[]" value="{{ $value }}" id="exp_{{ $value }}">
                                <label class="form-check-label" for="exp_{{ $value }}">{{ $label }}</label>
                            </div>
                        @endforeach

                        <div class="mb-3 mt-3">
                            <input type="text" name="exp_other" class="form-control" placeholder="Other experience (optional)">
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>


                    <!-- Step 6: Experience Level -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-rocket-takeoff"></i> Experience Level</h4>

                        <div class="mb-3">
                            <label for="years_dev" class="form-label">* Total years of experience in software development</label>
                            <input type="number" min="0" max="20" name="years_dev" id="years_dev" class="form-control" placeholder="e.g., 3 years" required>
                        </div>

                        <div class="mb-3">
                            <label for="years_ai" class="form-label">* Years of experience in AI/ML development</label>
                            <input type="number" min="0" max="20" step="1" name="years_ai" id="years_ai" class="form-control" placeholder="e.g., 3 years" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">* Have you worked in an AI-focused company before?</label>
                            <div class="form-check form-check-inline">
                                <input class=" custom-check" type="radio" name="ai_company" id="ai_company_yes" value="Yes" required>
                                <label class="form-check-label" for="ai_company_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="custom-check" type="radio" name="ai_company" id="ai_company_no" value="No" required>
                                <label class="form-check-label" for="ai_company_no">No</label>
                            </div>
                            <div class="invalid-feedback" id="ai-company-feedback" style="display: none;">
                                Please select an option.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="experience_level" class="form-label">* Current experience level</label>
                            <select name="experience_level" id="experience_level" class="form-control custom-select" required>
                                <option value="" disabled selected>Select your level</option>
                                <option value="Entry">Entry Level</option>
                                <option value="Junior">Junior</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Senior">Senior</option>
                                <option value="Expert">Expert</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>

                    <!-- Step 7: Availability & Work Preferences -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-calendar2-check"></i> Availability & Work Preferences</h4>

                        <!-- Employment Status -->
                        <div class="mb-3">
                            <label for="employment_status" class="form-label">Current Employment Status</label>
                            <select name="employment_status" id="employment_status" class="form-control custom-select" required>
                                <option value="" disabled selected>Select Employment Status</option>
                                <option value="Freelancer">Freelancer</option>
                                <option value="Full-time">Employed Full-time</option>
                                <option value="Part-time">Employed Part-time</option>
                                <option value="Student">Student</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Weekly Availability -->
                        <div class="mb-3">
                            <label for="available_hours" class="form-label">Hours per week you’re available</label>
                            <input type="number"  min="0" max="60" step="1" name="available_hours" id="available_hours" class="form-control" placeholder="e.g., 10" required>
                        </div>

                        <!-- Hourly Rate -->
                        <div class="mb-3">
                            <label for="hourly_rate" class="form-label">Expected hourly rate ( $ )</label>
                            <input type="number" min="0" max="60" step="1" name="hourly_rate" id="hourly_rate" class="form-control" placeholder="e.g., 10" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>


                    <!-- Step 9: Upload CV -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"> Upload CV</h4>
                        <div class="d-flex align-items-center mb-3">
                            <label class="btn btn-outline-danger me-2 mb-0"><i class="bi bi-upload me-1"></i>* Upload CV
                        <input type="file" name="cv" class="d-none" onchange="updateFileName(this)">
                            </label>
                            <span id="file-name" class="text-muted fst-italic">Max 5MB, .pdf</span>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="button" class="btn btn-next">Continue <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <!-- Step 10: Consent -->
                    <div class="form-step d-none">
                        <h4 class="mb-3"><i class="bi bi-mailbox-flag"></i> Final Submission</h4>
                        <div class="mb-3">
                            <label class="form-check-label"><input class="form-check-input custom-check"  type="checkbox" required> I agree with the privacy policy and accept that my data will be used for internal recruitment purposes by SwissAI Tailor.</label>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back</button>
                            <button type="submit" class="btn btn-warning">Submit Application</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>
@endsection
