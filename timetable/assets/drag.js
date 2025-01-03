const draggables = document.querySelectorAll(".subjectDrag")
const droppables = document.querySelectorAll(".subject")




draggables.forEach((subject) => {
    subject.addEventListener("dragstart", () => {
        subject.classList.add("is-dragging");
    });
    subject.addEventListener("dragend", () => {
        subject.classList.remove("is-dragging");
    });
});


droppables.forEach((zone) => {
    zone.addEventListener("dragover", (e) => {
        e.preventDefault();

        const bottomSubject = insertAboveSubject(zone, e.clientY);
        const curSubject = document.querySelector(".is-dragging");

        if (!bottomSubject) {
            zone.appendChild(curSubject);
        } else {
            zone.insertBefore(curSubject, bottomSubject);
        }

    });
});

const insertAboveSubject = (zone, mouseY) => {
    const els = zone.querySelectorAll(".subject:not(.is-dragging)");

    let closestSubject = null;
    let closestOffset = Number.NEGATIVE_INFINITY;

    els.forEach((subject) => {
        const { top } = subject.getBoundingClientRect();

        const offset = mouseY - top;

        if (offset < 0 && offset > closestOffset) {
            closestOffset = offset;
            closestSubject = subject;
        }
    });

    return closestSubject;


};