import Authenticated from "@/Layouts/Authenticated/Index";
import Button from "@/Components/Button";
import FlashMessage from "@/Components/FlashMessage";
import { Head, Link, useForm } from "@inertiajs/react";

export default function Index({ auth, flashMessage, movies }) {
    const { delete: destroy, put } = useForm();

    return (
        <Authenticated auth={auth}>
            <Head title="Admin - List of Movie" />
            <Link href={route('admin.dashboard.movie.create')}>
                <Button
                    type="button"
                    className="w-[200px] mb-4"
                >
                    Insert New Movie
                </Button>
            </Link>
            <hr className="mb-8"/>

            {flashMessage?.message && (
                <FlashMessage message={flashMessage.message}/>
            )}

            <table className="table-auto w-full text-center">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Rating</th>
                        <th colSpan={2}>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {movies.map(movie => (
                        <tr key={movie.id}>
                            <td>
                                <img
                                    src={`/storage/${movie.thumbnail}`}
                                    className="w-32 rounded-md shadow-md"
                                />
                            </td>
                            <td>
                                {movie.name}
                            </td>
                            <td>
                                {movie.category}
                            </td>
                            <td>
                                {movie.rating.toFixed(1)}
                            </td>
                            <td>
                                <Link
                                    href={route('admin.dashboard.movie.edit', movie.id)}
                                >
                                    <Button type="button" variant="warning">
                                        Edit
                                    </Button>
                                </Link>
                            </td>
                            <td>
                                <div
                                    onClick={() => {
                                        if (confirm('Are you sure?')) {
                                            movie.deleted_at ? put(route('admin.dashboard.movie.restore', movie.id)) : destroy(route('admin.dashboard.movie.destroy', movie.id));
                                        }
                                        // movie.deleted_at ? put(route('admin.dashboard.movie.restore', movie.id)) : destroy(route('admin.dashboard.movie.destroy', movie.id));
                                    }}
                                >
                                    <Button type="button" variant="danger">
                                        {movie.deleted_at ? 'Restore' : 'Delete'}
                                    </Button>
                                </div>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </Authenticated>
    );
}