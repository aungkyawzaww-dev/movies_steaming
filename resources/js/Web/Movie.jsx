import React from 'react'
import {createRoot} from 'react-dom/client'

const Movie = () => {
  return (
    <>
        <div className="row">
            <div className="col-12">
            <h2 className="text-white">Out of My Mind (2024)</h2>
            </div>
        </div>
        <div className="row">
            {/* image */}
            <div className="col-12 col-md-2">
            <img
                src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/o8qtMeCskitW5QwSu6O1nP4jN6z.jpg"
                className="w-100 rounded"
            />
            <div className="mt-2 bg-dark p-3 d-flex justify-content-between rounded">
                <i className="fa-regular fa-heart action-icon text-danger" />
                <i className="fa-regular fa-bookmark text-primary action-icon" />
                <i className="fa-regular fa-circle-down text-success action-icon" />
            </div>
            </div>
            {/* desc */}
            <div className="col-12 col-md-5">
            <div className="text-muted">
                Director : <span className="text-yellow">Amber Sealey</span>
            </div>
            <div className="text-muted">
                Cast :{" "}
                <span className="text-yellow">
                Phoebe-Rae Taylor,Jennifer Aniston,Rosemarie DeWitt
                </span>
            </div>
            <div className="text-muted">
                Genre : <span className="text-yellow">Drama</span>
            </div>
            <div className="text-muted">
                Running Time : <span className="text-yellow">140 min</span>
            </div>
            <div className="text-muted">
                Country : <span className="text-yellow">USA</span>
            </div>
            <div>
                <h5 className="text-white">Overview</h5>
                <p>
                Melody Brooks, a sixth grader with cerebral palsy, has a quick wit and
                a sharp mind, but because she is non-verbal and uses a wheelchair, she
                is not given the same opportunities as her classmates. When a young
                educator notices her student's untapped potential and Melody starts to
                participate in mainstream education, Melody shows that what she has to
                say is more important than how she says it.
                </p>
            </div>
            </div>
            {/* video player */}
            <div className="col-12 col-md-5">
            <video
                className="rounded"
                src="https://www.w3schools.com/html/mov_bbb.mp4"
                id="moviePlayer"
                controls=""
            />
            <div className="bg-dark p-2 rounded">
                <span className="btn btn-yellow">1</span>
                <span className="btn btn-outline-yellow">2</span>
                <span className="btn btn-outline-yellow">3</span>
            </div>
            </div>
            {/* movie tabs */}
            <div className="row mt-5">
            <div className="col-12 col-md-8">
                <nav>
                <div className="nav nav-tabs" id="nav-tab" role="tablist">
                    <span
                    className="active"
                    id="nav-home-tab"
                    data-toggle="tab"
                    data-target="#nav-home"
                    type="button"
                    role="tab"
                    aria-controls="nav-home"
                    aria-selected="true"
                    >
                    Comments &amp; Reviews
                    </span>
                    <span
                    className="ml-4"
                    id="nav-profile-tab"
                    data-toggle="tab"
                    data-target="#nav-profile"
                    type="button"
                    role="tab"
                    aria-controls="nav-profile"
                    aria-selected="false"
                    >
                    Photos
                    </span>
                </div>
                </nav>
                <div className="tab-content mt-3" id="nav-tabContent">
                <div
                    className="tab-pane fade show active"
                    id="nav-home"
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
                >
                    {/* comment list */}

                    <div className="mt-2 bg-dark rounded p-3">
                        <div className="comment">
                            <textarea name="" id="" className='form-control bg-transparent border border-dark' placeholder='Enter comment...'></textarea>
                            <button className='btn btn-primary'>Create Comment</button>
                        </div>
                    </div>

                    <div className="mt-2 bg-dark rounded p-3">
                        <div className="d-flex comment ">
                            <img
                            src="https://yt3.ggpht.com/CUOcBRQZX-34V3bj2FLdfSK3G2QU7wwgefuhvIkjUh5aGOYkUFBo7pwPXOoI1fl-1cqGxqig=s68-c-k-c0x00ffffff-no-rj"
                            className="rounded-circle"
                            />
                            <div className="ml-3">
                            <b className="d-block text-white">Myo Thant Kyaw</b>
                            <small className="text-muted d-block">1 day ago</small>
                            </div>
                        </div>
                        <div className="text-muted mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Exercitationem perspiciatis possimus expedita sed officiis ea
                            distinctio nam eligendi sit odio ab sint, placeat eaque aliquam
                            culpa dicta autem natus minus?
                        </div>
                    </div>
                    <div className="mt-2 bg-dark rounded p-3">
                        <div className="d-flex comment ">
                            <img
                            src="https://yt3.ggpht.com/CUOcBRQZX-34V3bj2FLdfSK3G2QU7wwgefuhvIkjUh5aGOYkUFBo7pwPXOoI1fl-1cqGxqig=s68-c-k-c0x00ffffff-no-rj"
                            className="rounded-circle"
                            />
                            <div className="ml-3">
                            <b className="d-block text-white">Myo Thant Kyaw</b>
                            <small className="text-muted d-block">1 day ago</small>
                            </div>
                        </div>
                        <div className="text-muted mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Exercitationem perspiciatis possimus expedita sed officiis ea
                            distinctio nam eligendi sit odio ab sint, placeat eaque aliquam
                            culpa dicta autem natus minus?
                        </div>
                    </div>
                    <div className="mt-2 bg-dark rounded p-3">
                        <div className="d-flex comment ">
                            <img
                            src="https://yt3.ggpht.com/CUOcBRQZX-34V3bj2FLdfSK3G2QU7wwgefuhvIkjUh5aGOYkUFBo7pwPXOoI1fl-1cqGxqig=s68-c-k-c0x00ffffff-no-rj"
                            className="rounded-circle"
                            />
                            <div className="ml-3">
                            <b className="d-block text-white">Myo Thant Kyaw</b>
                            <small className="text-muted d-block">1 day ago</small>
                            </div>
                        </div>
                        <div className="text-muted mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Exercitationem perspiciatis possimus expedita sed officiis ea
                            distinctio nam eligendi sit odio ab sint, placeat eaque aliquam
                            culpa dicta autem natus minus?
                        </div>
                    </div>
                </div>
                <div
                    className="tab-pane fade"
                    id="nav-profile"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab"
                >
                    <div className="row">
                    <div className="col-12 col-md-3">
                        <img
                        src="https://media.themoviedb.org/t/p/w500_and_h282_face/t8gYxihohFaDQa6KAL21UkUK4Qt.jpg"
                        className="rounded w-100"
                        />
                    </div>
                    <div className="col-12 col-md-3">
                        <img
                        src="https://media.themoviedb.org/t/p/w1000_and_h563_face/thDLoKyWdgK6EWXwGsjYqAFenuN.jpg"
                        className="rounded w-100"
                        />
                    </div>
                    <div className="col-12 col-md-3">
                        <img
                        src="https://media.themoviedb.org/t/p/w500_and_h282_face/t8gYxihohFaDQa6KAL21UkUK4Qt.jpg"
                        className="rounded w-100"
                        />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div className="col-12 col-md-4">
                <div className="row">
                <div className="col-12">
                    <h3 className="text-white">Related Movies</h3>
                </div>
                </div>
                <div className="row">
                <div className="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                    <div
                    className="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style={{
                        backgroundImage:
                        'url("https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg")'
                    }}
                    >
                    {/* rating */}
                    <div className="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span className="text-white">7.9</span>
                    </div>
                    {/* play icon */}
                    <div className="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i className="fa-regular fa-circle-play text-yellow" />
                    </div>
                    </div>
                </div>
                <div className="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                    <div
                    className="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style={{
                        backgroundImage:
                        'url("https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg")'
                    }}
                    >
                    {/* rating */}
                    <div className="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span className="text-white">7.9</span>
                    </div>
                    {/* play icon */}
                    <div className="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i className="fa-regular fa-circle-play text-yellow" />
                    </div>
                    </div>
                </div>
                <div className="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                    <div
                    className="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style={{
                        backgroundImage:
                        'url("https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg")'
                    }}
                    >
                    {/* rating */}
                    <div className="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span className="text-white">7.9</span>
                    </div>
                    {/* play icon */}
                    <div className="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i className="fa-regular fa-circle-play text-yellow" />
                    </div>
                    </div>
                </div>
                <div className="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                    <div
                    className="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style={{
                        backgroundImage:
                        'url("https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg")'
                    }}
                    >
                    {/* rating */}
                    <div className="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span className="text-white">7.9</span>
                    </div>
                    {/* play icon */}
                    <div className="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i className="fa-regular fa-circle-play text-yellow" />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </>

  )
}

// export default Movie
createRoot(document.getElementById('movieDetail')).render(<Movie/>);
