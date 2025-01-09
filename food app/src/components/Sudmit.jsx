import { useFormStatus } from "react-dom"

export default function Sudmit() {

    const { pending } = useFormStatus()
    return (
        <p className="actions">
          <button type="submit" disabled={pending}>{pending ? 'Sudmitting...' : 'Sudmit'}</button>
        </p>
    )
}