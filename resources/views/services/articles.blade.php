@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Experts Articles</li>
        </ol>
    </nav>

    <!-- Search Bar -->
    <div class="row mb-4">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search articles...">
            <button class="btn btn-primary" type="button">
                <i class="bi bi-search"></i> Search
            </button>
        </div>
    </div>
</div>

    <div class="row">
        <!-- Article 1 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a1.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Experts by experience are invaluable in mental health: but how exactly?</h5>
                            <p class="card-text">Experts and professionals have essential skills and knowledge, but most decision-makers would recognise (in theory, at least) that those who have personal experience of living with anxiety, depression, eating disorders, bipolar disorder, psychosis, schizophrenia or other mental health challenges can bring something special and different.</p>
                            <a href="https://www.mentalhealth.org.uk/explore-mental-health/blogs/experts-experience-are-invaluable-mental-health-how-exactly" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a2.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Understanding the impact of expert by experience roles in mental health education</h5>
                            <p class="card-text">The aim of this research is to better understand the impact of EBE on the universities they work in, from the perspectives of allies who have supported the implementation and sustainability of their positions.</p>
                            <a href="https://www.sciencedirect.com/science/article/abs/pii/S0260691722000600" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a3.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Could you use your own experiences of using mental health services to help others?</h5>
                            <p class="card-text">We recognise that there are many ways that people gain understanding and expertise in mental health, and one of the most important is from lived experience. Experts by Experience use their own experiences of a mental health issue and using mental health services to help inform and improve the ways that support is delivered to others.</p>
                            <a href="https://www.solentmind.org.uk/news-events/news/experts-by-experience/" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 4 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a4.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Become an Expert by Experience Leader</h5>
                            <p class="card-text">An ‘EbEL’ stands for Expert by Experience Leader. They represent the voice of lived experience in Open Mental Health. EbELs are working as equal partners in Open Mental Health to transform the way the whole system works, and hopefully leading to better outcomes for people. This is a trailblazing model of working which means that the voice of lived experience is central to decision making. This is exciting and dynamic, and gives EbELs great experience and transferrable skills as well as steering system wide decisions. </p>
                            <a href="https://openmentalhealth.org.uk/individuals/become-an-expert-by-experience/" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 5 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a5.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Mental health and lived experience: The value of lived experience expertise in global mental health</h5>
                            <p class="card-text">This article places particular focus on people with lived experience and the role their expertise brings to discussions on mental health, highlighting their valuable and highly resourceful contributions to the global mental health sector.</p>
                            <a href="https://www.cambridge.org/core/journals/global-mental-health/article/mental-health-and-lived-experience-the-value-of-lived-experience-expertise-in-global-mental-health/2AFA684B8CBE09C414C84CF0E4B3E293" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 6 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a6.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Acting as a Mental Health Expert by Experience and Its Impact on Social Identity</h5>
                            <p class="card-text">Through experiential expertise, experts can bring considerable know-how of psychiatric rehabilitation and recovery orientation to service encounters (Leamy et al., 2011; van Weeghel et al., 2019), thereby emphasizing the dignity and relevance of individual experiences.</p>
                            <a href="https://link.springer.com/article/10.1007/s10597-023-01207-w" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 7 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a7.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Experts' Opinions in Public Mental Health: Emerging Issues in the Field</h5>
                            <p class="card-text">In recent years, different forms of poverty and their interaction with mental illness have been in the focus of research, although the implementation of action in mental health care and policy making so far is scarce. This perspective article offers different perspectives of poverty and its reciprocal association with mental illness and outlines possible future research and policy implications. We will approach the topic of poverty from various levels: On a micro-level, focusing on absolute poverty with precarious housing and malnutrition. On a meso-level, on neighborhood-related poverty as a factor in individuals' mental illness. On a macro-level, on effects of income inequality on mental health.</p>
                            <a href="https://www.frontiersin.org/research-topics/31338/experts-opinions-in-public-mental-health-emerging-issues-in-the-field/magazine" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 8 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a8.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">What Makes Someone an Expert in Mental Health?</h5>
                            <p class="card-text">Many different kinds of mental health professionals — psychologists, psychiatrists, clinical social workers, and others — are trained to provide talk therapy for mental and emotional health. Specialties vary in terms of training required, licenses acquired, and types of treatment a provider can offer. Depending on your concerns and individual goals, one type may be a better choice than another when you’re considering therapy.</p>
                            <a href="https://www.everydayhealth.com/emotional-health/what-makes-someone-an-expert-in-mental-health/#:~:text=They%20are%20trained%20to%20evaluate%20someone%E2%80%99s%20mental%20health,health%20diagnoses%2C%20and%20provide%20group%20and%20individual%20therapy." class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 9 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a9.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">10 of the Most Famous Psychologists</h5>
                            <p class="card-text">Some of the most famous psychologists in history have contributed to our understanding of human thought and behavior. The breadth and diversity of psychology can be seen by looking at some of its best-known thinkers.1 While each theorist may have been part of an overriding school of thought, each brought a unique perspective to psychology.</p>
                            <a href="https://www.verywellmind.com/most-influential-psychologists-2795264" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 10 -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm hover-shadow-lg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/a10.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Types of Mental Health Professionals</h5>
                            <p class="card-text">Many types of mental health care professionals can help you achieve your recovery goals. These professionals work in inpatient facilities, such as general hospitals and psychiatric facilities, and outpatient facilities, such as community mental health clinics, schools and private practices.</p>
                            <a href="https://www.nami.org/About-Mental-Illness/Treatments/Types-of-Mental-Health-Professionals/" class="btn btn-sm btn-primary read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Pagination -->
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Custom CSS for Card Layout and Hover Effect -->
<style>
.card {
    transition: all 0.3s ease-in-out;
    height: 100%;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    transform: scale(1.02);
}

/* Kolom Gambar */
.col-md-4 {
    max-width: 150px;
    display: flex;
    align-items: center;
    margin-left: 15px; /* Memberikan jarak antara gambar dan sisi kiri */
}

.col-md-4 img {
    width: 100%;
    height: 150px; /* Membuat gambar simetris persegi */
    object-fit: cover;
    border-radius: 0.375rem 0 0 0.375rem;
}

/* Kolom Konten */
.col-md-8 {
    display: flex;
    flex-direction: column;
    padding-left: 15px; /* Memberikan jarak antara gambar dan konten */
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

.card-text {
    font-size: 1rem;
    color: #6c757d;
}

/* Tombol Read More */
.read-more-btn {
    transition: all 0.3s ease-in-out;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    padding: 0.25rem 0.5rem;
    font-size: 0.85rem;
    border-radius: 0.25rem;
}

.read-more-btn:hover {
    background-color: #0056b3;
    color: #fff;
    text-decoration: none;
}
</style>
@endsection
